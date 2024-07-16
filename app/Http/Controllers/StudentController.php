<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // return Student::all();

        // return Student::where('province', 'Alaska')->get();

      //  return Student::where('province', 'Alaska')
      //  ->where('fname', 'Lucy')
      //  ->get();
       

      //return Student::where('province', 'Alaska')
      //  ->orWhere('province', 'South Dakota')
      //  ->orWhere('fname', 'Brad')
      //  ->get();

      //  return Student::where('province','like', '%t%')->get();

      //  return Student::orderBy('fname')->get();
      //  return Student::orderBy('fname', 'desc')->get();

      //  return Student::limit(7)->get();

      //  return Student::whereIn('id', [1,3,4,5,7,9,11])->get();

      //  return Student::where('province', 'South Dakota')->first();

      //  return Student::with('grades')->get();

        return Student::with(['grades' => function($query){
            return $query->where('grade', '>=', 90);

        }])->get();
    }

    public function store(Request $request)
    {
        // Logic to store a new user
    }

    public function show(string $id)
    {
        // return Student::find($id);

      //  $student = Student::find($id);
      //  return $student->fname . ' ' . $student->lname;

        $student = Student::find($id);
        return $student->fullname;

    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific user by $id
    }

    public function destroy($id)
    {
        // Logic to delete a specific user by $id
    }

}
