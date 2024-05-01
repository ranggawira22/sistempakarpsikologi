<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use Illuminate\Http\Request;
use App\Models\Hypothesis;
use App\Models\Rule;
use App\Models\Setting;

class HypothesisController extends Controller
{
    public function index(){
        return view('hypothesis.index', [
            'title' => 'Hypothesis',
            'hypotheses' => Hypothesis::orderby('id', 'desc')->get(),
            'hypothesis_name' => Setting::find(1)->hypothesis_name,
        ]);
    }

    public function autoCode(){
        $lates_evidence = Hypothesis::orderby('id', 'desc')->first();
        $code = $lates_evidence->code;
        $order = (int) substr($code, 2, 4);
        $order++;
        $letter = "H";
        $code = $letter . sprintf("%04s", $order);
        return $code;
    }
    
    public function create(){
        return view('hypothesis.create', [
            'title' => 'Create Gangguan',
            'code' => $this->autoCode()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|max:255|unique:hypotheses',
            'name' => 'required|max:255',
            'description' => 'required'
        ]);

        Hypothesis::create([
            'user_id' => 1,
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
            'solution' => $request->solution
        ]);

        $hypothesis = Hypothesis::orderby('id', 'desc')->first();
        $evidance = Evidence::all();

        foreach ($evidance as $evidence) {
            Rule::create([
                'hypothesis_id' => $hypothesis->id,
                'evidence_id' => $evidence->id,
                'value' => 0.0
            ]);
        }

        return redirect()->route('hypothesis.index')->with('status', 'Data created successfully');
    }

    public function edit($id)
    {
        return view('hypothesis.edit', [
            'title' => 'Edit Gangguan',
            'hypothesis' => Hypothesis::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);


        Hypothesis::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'solution' => $request->solution
        ]);

        return redirect()->route('hypothesis.index')->with('status', 'Data updated successfully');
    }

    public function destroy($id)
    {
        Hypothesis::where('id', $id)->delete();
        Rule::where('evidence_id', $id)->delete();
        return redirect()->route('hypothesis.index')->with('status', 'Data deleted successfully');
    }
}
