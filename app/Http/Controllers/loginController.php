<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    public function show($id)
    {
        
    }


    public function login(Request $request)
    {
        
        $email =  $request->get('email');
        $password = $request->get('password');
        


        if($email = "admin@admin" && $password="123"){
        
            return redirect("/subjects");
        }
        
        if($email = "student@student" && $password="123"){
            return redirect("/download");
        }

        
        if($email = "doctor@doctor" && $password="123"){
            return redirect("/upload");
        }        
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
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
