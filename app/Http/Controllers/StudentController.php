<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    //

    // public function showStudents()
    // {
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



    // $students = DB::table('students')
    //     ->leftJoin('cities', function (JoinClause $join) {
    //         $join->on('students.city', '=', 'cities.id');
    //     })
    //     ->where('students.name', 'like', 'a%')
    //     ->select('students.*', 'cities.city_name')
    //     ->get();
    // return $students;
    // return view('welcome', compact('students'));
    // }

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


    public function showStudents()
    {
        // $students = DB::select("select * from students");
        // // return $students;

        // foreach ($students as $student) {
        //     echo $student->name . "<br>";
        // }

        // $students = DB::select("select name, age from students");
        // return $students;

        // $students = DB::select("select name, age from students where id = ?", [1]);
        // $students = DB::select("select name, age from students where name like ?", ["a%"]);
        // $students = DB::select("select name, age from students where name = ?", ["Fatima Khan"]);

        // $students = DB::select("select name, age from students where age > ? and name like ?", [20, "a%"]);

        // name binding 
        // $students = DB::select("select name, age from students where id = :id", ['id' => 3]);        



        // $students = DB::insert("insert into students(name, email, age, city) values(?, ?, ?, ?)", ['Ali', 'ali@ali.com', 45, 3]);




        // $students = DB::update("update students set email = 'alitest@ali.comm' where id = ? ", [11]);



        // $students = DB::delete("delete from students where id = ? ", [11]);



        // $students = DB::statement("drop table students");

        // // secure 
        //         $students = DB::delete("delete from students where id = ? ", [11]);

        //         // unsecure 
        //         $students = DB::unprepared("delete from students where id = 11 ");

        // return $students;



        // RAW METHODS 


        // DB::table('users')
        //     ->select('name', 'age')
        //     ->get();
        // DB::table('users')
        //     ->selectRaw('name, age')
        //     ->get();


        // DB::table('users')
        //     ->where('age', '>', '20')
        //     ->get();

        // DB::table('users')
        //     // ->whereRaw('age > 20')
        //     ->whereRawCage('age > ?', [20])
        //     ->get();


        // DB::table('users')
        //     ->orderBy('age', 'city')
        //     ->get();
        // DB::table('users')
        //     ->orderByRaw('age, city')
        //     ->get();




        // $students = DB::table('students')
        //     ->selectRaw('name, age')
        //     ->get();



        // $students = DB::table('students')
        //     ->selectRaw('name, age')
        //     ->whereRaw('age > ?', [20])
        //     ->get();


        // $students = DB::table('students')
        //     ->selectRaw('name, age')
        //     ->whereRaw('age > ? and name like ?', [20 , 'a%'])
        //     ->get();


        // $students = DB::table('students')
        //     ->selectRaw('name, age')
        //     // ->orderByRaw('age ')
        //     // ->orderByRaw('age DESC')
        //     ->orderByRaw('age , name')
        //     ->get();


        // $students = DB::table('students')
        //     ->selectRaw('count(*) as student_count, age')
        //     ->groupBy('age')
        //     ->get();

        // $students = DB::table('students')
        //     ->select(DB::raw('count(*) as student_count'), 'age')
        //     ->groupBy('age')
        //     ->get();

        // $students = DB::table('students')
        //     ->select(DB::raw('count(*) as student_count'), 'age')
        //     // ->where('age', '>', 20)
        //     ->where(DB::raw('age'), '>', 20)
        //     ->groupBy('age')
        //     ->get();


        // $students = DB::table('students')
        //     ->select(DB::raw('count(*) as student_count'), 'age')
        //     // ->where('age', '>', 20)
        //     ->where(DB::raw('age'), '>', 20)
        //     ->groupByRaw('age, city')
        //     ->get();

        // $students = DB::table('students')
        //     ->select(DB::raw('count(*) as student_count'), 'age')
        //     ->where(DB::raw('age'), '>', 20)
        //     ->groupByRaw('age')
        //    ->havingRaw('age > ?', [20])
        //     ->get();

        // $students = DB::table('students')
        //     ->select(DB::raw('count(*) as student_count'), 'age')
        //     ->where(DB::raw('age'), '>', 20)
        //     ->groupByRaw('age')
        //     ->havingRaw('age > ?', [20])
        //     ->toSql();

        // return $students;
    }
}
