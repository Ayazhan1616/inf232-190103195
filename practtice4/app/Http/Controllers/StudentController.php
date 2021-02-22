<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show_name($id){
        static $students = array(0=>"Ayazhan", 1=>"Aruzhan", 2=>"Dilya");
        return view('nameinfo', ["name" => $students[$id]]);
    }
  
    public function show_date($name){
        static $students_d = array("Ayazhan"=>"16/12/2001", "Aruzhan"=>"09/02/2002", "Dilya"=>"10/10/2000");
        return view('dateinfo', ["birthday" => $students_d[$name]], ["name" => $name]);
    }
    public function show_age($name){
        static $students_a = array("Ayazhan"=>"19", "Aruzhan"=>"19", "Dilya"=>"20");
        return view('ageinfo', ["age" => $students_a[$name]], ["name" => $name]);

    
    }


}
