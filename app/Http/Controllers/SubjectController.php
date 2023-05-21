<?php

namespace App\Http\Controllers;

use App\Models\subject;
use App\Models\departements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = subject::get();
        return view('subject.index' , ['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements = departements::get();
        return view('subject.create' , ['departements' => $departements]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $formFields = $request->validate([
            'name'=>'required',
            'code'=>'required',
            'departement_id'=>'required',
       ]);
       
        subject::create($formFields);
        $subject = subject::get();
       return view('subject.show' , ['subjects' => $subject])->with('status' , 'subject Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject )
    {
        return view('subject.show' , [ 'subject' => $subject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        $departements = departements::get();
        return view('subject.edit', ['subject' => $subject ,'departements' => $departements ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $formFields = $request->validate([
            'name'=>'required',
            'code'=>'required',
            'departement_id'=>'required',
       ]);

       $subject->update($formFields);
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Subject $subject)
    {
        $subject->delete();
    }
}
