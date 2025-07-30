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
}
