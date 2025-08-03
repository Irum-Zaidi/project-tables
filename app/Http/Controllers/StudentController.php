<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    //

    public function showStudents()
    {
        // Logic to retrieve and display students
        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')
        //     ->select('students.*', 'cities.city_name')
        //     ->get();
        // // return $students;
        // return view('welcome', compact('students'));

        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')
        //     // ->join('fees', 'students.fee_id', '=', 'fees.id')
        //     ->select('students.*', 'cities.city_name')
        //     ->get();
        // // return $students;
        // return view('welcome', compact('students'));


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select('students.*', 'cities.city_name')
        //     ->where('students.email', '=','iqra@example.com')
        //     ->get();
        // // return $students;
        // return view('welcome', compact('students'));

        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select('students.*', 'cities.city_name')
        //     ->where('students.name', 'like','a%')
        //     ->get();
        // // return $students;
        // return view('welcome', compact('students'));


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select('students.*', 'cities.city_name')
        //     ->where('cities.city_name', '=','Lahore')
        //     ->get();
        // // return $students;
        // return view('welcome', compact('students'));



        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select('students.*', 'cities.city_name')
        //     ->count();
        // return $students;
        // // return view('welcome', compact('students'));




        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select('students.*', 'cities.city_name')
        //     ->where('cities.city_name', '=','Lahore')
        //     ->count();
        // return $students;



        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select(DB::raw('count(*) as student_count'))            
        //     ->get();
        // return $students;



        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select(DB::raw('count(*) as student_count'), 'age')  
        //     ->groupBy('age')          
        //     ->get();
        // return $students;      

        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select(DB::raw('count(*) as student_count'), 'city')  
        //     ->groupBy('city')          
        //     ->get();
        // return $students;


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select(DB::raw('count(*) as student_count'), 'cities.city_name')  
        //     ->groupBy('city_name')          
        //     ->get();
        // return $students;


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')           
        //     ->select(DB::raw('count(*) as student_count'), 'cities.city_name')  
        //     ->groupBy('city_name')
        //     // ->orderBy('student_count')          
        //     ->orderBy('student_count', 'DESC')          
        //     ->get();
        // return $students;

        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')
        //     ->select(DB::raw('count(*) as student_count'), 'cities.city_name')
        //     ->groupBy('city_name', 'age')
        //     // ->orderBy('student_count')          
        //     ->orderBy('student_count', 'DESC')
        //     ->get();
        // return $students;


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')
        //     ->select(DB::raw('count(*) as student_count'), 'cities.city_name')
        //     ->groupBy('city_name')
        //     ->where('cities.city_name', '=', 'Lahore')
        //     ->get();
        // return $students;


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')
        //     ->select(DB::raw('count(*) as student_count'), 'cities.city_name')
        //     ->groupBy('city_name')
        //     ->having('cities.city_name', '=', 'karachi')
        //     ->get();
        // return $students;


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')
        //     ->select(DB::raw('count(*) as student_count'), 'cities.city_name')
        //     ->groupBy('city_name')
        //     // ->having('student_count', '=', 1)
        //     ->having('student_count', '<', 1)
        //     // ->having('student_count', '>', 1)
        //     ->get();
        // return $students;


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')
        //     ->select(DB::raw('count(*) as student_count'), 'cities.city_name')
        //     ->groupBy('city_name')
        //     ->havingBetween('student_count', [1,2])
        //     ->get();
        // return $students;


        // $students = DB::table('students')
        //     ->join('cities', 'students.city', '=', 'cities.id')
        //     ->select(DB::raw('count(*) as student_count'), 'cities.city_name')
        //     ->groupBy('city_name')
        //     ->havingBetween('student_count', [1,3])
        //     ->get();
        // return $students;



        // $students = DB::table('students')
        //     ->leftJoin('cities', 'students.city', '=', 'cities.id')
        //     // ->select(DB::raw('count(*) as student_count'), 'cities.city_name')
        //     ->get();
        // return $students;


        //     $students = DB::table('students')
        //         ->leftJoin('cities', function(JoinClause $join){
        //             $join->on('students.city', 'cities.id')
        //             ->where('students.name', 'like' , 'a%');
        //         })
        //         ->get();
        //     return $students;



        $students = DB::table('students')
            ->leftJoin('cities', function (JoinClause $join) {
                $join->on('students.city', '=', 'cities.id');
            })
            ->where('students.name', 'like', 'a%')
            ->select('students.*', 'cities.city_name')
            ->get();
        return $students;
        // return view('welcome', compact('students'));
    }

    // public function uniondata() {
    //     $lecturers = DB::table('lecturers');
    //     $students = DB::table('students')
    //     ->union($lecturers)
    //     ->get();
    //     return $students;
    // }

    // public function uniondata() {
    //     $lecturers = DB::table('lecturers')
    //     ->select('name','email');

    //     $students = DB::table('students')
    //     ->union($lecturers)
    //     ->select('name','email')
    //     ->get();
    //     return $students;
    // }

    // public function uniondata() {

    //     $lecturers = DB::table('lecturers')
    //     ->select('name','email','city_name')
    //     ->join('cities','lecturers.city', '=', 'cities.id');

    //     $students = DB::table('students')
    //     ->union($lecturers)
    //     ->select('name','email','city_name')
    //     ->join('cities','students.city', '=', 'cities.id')
    //     ->get();
    //     return $students;
    // }

    // public function uniondata() {

    //     $lecturers = DB::table('lecturers')
    //     ->select('name','email','city_name')
    //     ->join('cities','lecturers.city', '=', 'cities.id');

    //     $students = DB::table('students')
    //     ->union($lecturers)
    //     ->select('name','email','city_name')
    //     ->join('cities','students.city', '=', 'cities.id')
    //     ->toSql();
    //     return $students;
    // }


    public function uniondata()
    {

        $lecturers = DB::table('lecturers')
            ->select('name', 'email', 'city_name')
            ->join('cities', 'lecturers.city', '=', 'cities.id')
            ->where('city_name', '=', 'islamabad');

        $students = DB::table('students')
            ->union($lecturers)
            ->select('name', 'email', 'city_name')
            ->join('cities', 'students.city', '=', 'cities.id')
            ->where('city_name', '=', 'lahore')
            ->get();
        return $students;
    }
    // public function whendata(){

    //     $students = DB::table('students')
    //     ->when(true, function($query){
    //       $query->where('age','=','20');  
    //     })
    //     ->get();
    //     return $students;
    // }

    // public function whendata(){

    //     $students = DB::table('students')
    //     ->when(false, function($query){
    //       $query->where('age','=','20');  
    //     })
    //     ->get();
    //     return $students;
    // }

    // public function whendata(){

    //     $students = DB::table('students')
    //     ->when(false, function($query){
    //       $query->where('age','=','20');  
    //     }, function($query){
    //         $query->where('age','>','20');  
    //     })
    //     ->get();
    //     return $students;
    // }


    // public function whendata()
    // {


    //     $students = DB::table('students')
    //         ->when( function ($query) {
    //             $query->where('age', '=', '20');
    //         }, function ($query) {
    //             $query->where('age', '>', '20');
    //         })
    //         ->get();
    //     return $students;
    // }
    public function whendata()
    {

        $test = false;

        $students = DB::table('students')
            ->when($test, function ($query) {
                $query->where('age', '=', '20');
            }, function ($query) {
                $query->where('age', '>', '20');
            })
            ->get();
        return $students;
    }

    // public function chunkdata(){
    //       $students = DB::table('students')
    //       ->orderBy('id')->chunk(3, function($students) {
    //         foreach($students as $student) {
    //             echo $student->name . "<br>";
    //         }
    //       });

    // }

    // public function chunkdata()
    // {
    //     $students = DB::table('students')
    //         ->orderBy('id')->chunk(3, function ($students) {
    //             echo "<br><hr><br>";
    //             foreach ($students as $student) {
    //                 echo $student->name . "<br>";
    //             }
    //         });
    // }


    // public function chunkdata()
    // {
    //     $students = DB::table('students')
    //         ->orderBy('id')->chunkById(2, function ($students) {
    //             echo "<br><hr><br>";
    //             foreach ($students as $student) {
    //                 echo $student->name . "<br>";
    //             }
    //         });
    // }

    // public function chunkdata()
    // {
    //     $students = DB::table('students')
    //         ->orderBy('id')->chunkById(2, function ($students) {

    //             foreach ($students as $student) {
    //                 DB::table('students')
    //                 ->where('id' , $student->id)
    //                 ->update(['status'=>true]);
    //             }
    //         });
    // }
}
