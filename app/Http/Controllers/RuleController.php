<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hypothesis;
use App\Models\Rule;
use App\Models\Value;
use App\Models\Setting;

class RuleController extends Controller
{
    public function index()
    {
        return view('rule.index',[
            'title' => 'Rule',
            'hypothesis' => Hypothesis::orderBy('id','desc')->get(),
            'role' => Rule::all(),
            'setting_type_input' => Setting::find(1),
            'values' => Value::orderby('value','asc')->get(),
            'min' => Value::where('value', 0)->first(),
            'max' => Value::where('value', 1)->first(),
        ]);
    }

    public function store(Request $request)
    {
        foreach ($request->id_role as $key => $role){
            Rule::where('id', $role)->update([
                'value' => $request->evidance_value[$key]
            ]);
        }

        return redirect()->route('rule.index');
    }

}
