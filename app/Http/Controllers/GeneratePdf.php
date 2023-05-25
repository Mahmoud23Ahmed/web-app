<?php

namespace App\Http\Controllers;
use PDF;
use Auth;
use Validator;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade as DomPDF;

class GeneratePdf extends Controller
{
    public function generate(){
        $students = Student::get();
        $pdf = Pdf::loadView('student.show', array('students'=>$students))->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->setPaper('A4','landscape');
        return $pdf->stream();
    }
    // public function list(){
    //     $student = Student::get();
    //     return view('update' , ['students'=>$student]);

    // }
    // public function index()
    // {
    //     return view('update');
    // }
    
    // public function import_student(){

    // }
    // public function export_student(){
    //     $pdf = PDF::loadView('pdf.student');
    //     return $pdf->download('student.pdf') ;
 
    // }
    // public function export_student_pdf(){

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
