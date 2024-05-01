<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use App\Models\Hypothesis;
use App\Models\Rule;
use App\Models\Setting;
use Illuminate\Http\Request;

class EvidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evidence.index', [
            'title' => 'Evidences',
            'evidences' => Evidence::orderby('id', 'desc')->get(),
            'evidence_name' => Setting::find(1)->evidence_name,
        ]);
    }

    public function autoCode(){
        $lates_evidence = Evidence::orderby('id', 'desc')->first();
        $code = $lates_evidence->code;
        $order = (int) substr($code, 2, 4);
        $order++;
        $letter = "EC";
        $code = $letter . sprintf("%04s", $order);
        return $code;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evidence.create', [
            'title' => 'Create Gejala',
            'code' => $this->autoCode()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEvidenceRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|max:255|unique:evidence',
            'name' => 'required|max:255'
        ]);

        Evidence::create([
            'code' => $request->code,
            'name' => $request->name,
        ]);

        $hypothesis = Hypothesis::all();
        $evidence = Evidence::orderby('id', 'desc')->first();

        foreach ($hypothesis as $h) {
            Rule::create([
                'hypothesis_id' => $h->id,
                'evidence_id' => $evidence->id,
                'value' => 0.0
            ]);
        }

        return redirect()->route('evidence.index')->with('status','Data created succesfully!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function show(Evidence $evidence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evidence = Evidence::where('id',$id)->first();
        return view('evidence.edit', [
            'title' => 'Edit Gejala',
            'evidence' => $evidence
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEvidenceRequest  $request
     * @param  \App\Models\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        Evidence::where('id', $id)
            ->update([
                'name' => $request->name
            ]);
            
        return redirect()->route('evidence.index')->with('status','Data updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evidence  $evidence
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evidence::where('id',$id)->delete();
        Rule::where('evidence_id',$id)->delete();
        return redirect()->route('evidence.index')->with('status','Data deleted succesfully!');
    }
}
