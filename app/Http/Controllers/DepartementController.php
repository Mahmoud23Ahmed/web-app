<?php

namespace App\Http\Controllers;
use App\Models\departements;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DepartementController extends Controller
{ 
    public function index()
    {
        $departements = departements::get();
        return view('departements.index' , ['departements' => $departements ]);
    }

    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departements.create');
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
       ]);
       
       departements::create($formFields);
       $departements= departements::get();
       return view('departements.show' , ['departements' => $departements]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(departements $departements )
    {
        return view('departements.show' , [ 'departements' => $departements]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(departements $departements )
    {
        $departements = departements::get();
        return view('departements.edit', ['departements' => $departements ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departements $departements )
    {
        $formFields = $request->validate([
            'name'=>'required',
            'code'=>'required',
       ]);

       $departements->update($formFields);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(departements $departements )
    {
        $departements->delete();
    }
}
