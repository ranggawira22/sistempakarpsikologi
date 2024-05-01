<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Evidence;
use App\Models\Hypothesis;
use App\Models\User;
use App\Models\Rule;
use App\Models\History;
use App\Models\Setting;
use App\Models\Value;

class DashboardController extends Controller
{
    public function index()
    {
        $hypotesis = Hypothesis::all();
        $histores = History::orderby('id', 'desc')->get();

        return view('dashboard', [
            'title' => 'Dashboard',
            'count_user' => User::count(),
            'count_evidence' => Evidence::count(),
            'count_hypotesis' => Hypothesis::count(),
            'count_history' => History::count(),
            'histores' => $histores,
            'hypotesis' => $hypotesis,
            'history' => History::all(),
        ]);
    }

    public function expert_system()
    {
        $evidences = Evidence::all();

        return view('expert_system', [
            'title' => 'Expert System',
            'evidences' => $evidences,
            'setting_type_input' => Setting::find(1),
            'values' => Value::orderby('value', 'asc')->get(),
            'min' => Value::where('value', 0)->first(),
            'max' => Value::where('value', 1)->first(),
        ]);
    }

    public function expert_system_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $hypothesyes = Hypothesis::all();
        $roles = Rule::all();
        $evidences = Evidence::all();

        $menu = [];

        foreach ($hypothesyes as $hypothesis) {
            $arrid = 0;
            $cf_old = 0;
            foreach ($roles as $key => $role) {
                if ($hypothesis->id == $role->hypothesis_id) {
                    $ard = $arrid++;
                    if ($request->evidance_value[$ard] != 0) {
                        $cfhe = $role->value * $request->evidance_value[$ard];
                        $cf_old === 1 ? $cfhe : $cf_old = $cf_old + $cfhe * (1 - $cf_old);
                    }
                }
            }
            if ($cf_old > 0) {
                $menu[] = array(
                    'id' => $hypothesis->id,
                    'nama' => $hypothesis->name,
                    'hsl' => number_format($cf_old * 100, 2, '.', ''),
                    'slsi' => $hypothesis->solution
                );
            }
        }

        // Sort the $menu array in descending order based on the 'hsl' key
        usort($menu, function ($a, $b) {
            return $b['hsl'] <=> $a['hsl'];
        });

        // Store the top 3 hypotheses with value greater than 0 in the History model
        for ($i = 0; $i < 3 && $i < count($menu); $i++) {
            History::create([
                'hypothesis_id' => $menu[$i]['id'],
                'name' => $request->name,
                'description' => $request->description,
                'value' => $menu[$i]['hsl'],
            ]);
        }

        return view('expert_result', [
            'title' => 'Expert Result',
            'hypothesyes' => $hypothesyes,
            'roles' => $roles,
            'evidences' => $evidences,
            'request' => $request,
            'histores' => History::orderBy('value', 'desc')->take(3)->get(), // Pass the top 3 hypotheses
        ]);
    }

    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'setting' => Setting::find(1),
        ]);
    }

    public function login()
    {
        return view('login', [
            'title' => 'Login',
        ]);
    }

    public function login_process(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6|'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }
        return redirect('/login')->with('status', 'Login Gagal!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('profile', [
            'title' => 'Profile',
            'user' => $user,
        ]);
    }

    public function profile_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required|min:6|confirmed',
            // 'repassword' => 'required|same:password',
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/profile')->with('status', 'Profile Berhasil Diupdate!');
    }

    public function updateAccuracy(Request $request)
    {
        $historyIds = $request->input('history_id', []);
        $isAccurate = $request->input('is_accurate', []);
        $updatedAccuracies = [];
    
        foreach ($historyIds as $id) {
            $patientId = History::findOrFail($id)->name;
            $patientHistories = History::where('name', $patientId)->orderBy('value', 'desc')->get();
    
            if ($patientHistories->isNotEmpty()) {
                foreach ($patientHistories as $history) {
                    $history->is_accurate = false;
                }
    
                $highestCFHistory = $patientHistories->first();
                $highestCFHistory->is_accurate = isset($isAccurate[$id]) ? true : false;
                $highestCFHistory->save();
    
                $updatedAccuracies[$id] = $highestCFHistory->is_accurate;
            }
        }
    
        return redirect()->back()->with('success', 'Accuracy updated successfully.')->with('updatedAccuracies', $updatedAccuracies);
    }
}