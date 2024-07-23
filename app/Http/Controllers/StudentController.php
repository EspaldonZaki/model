<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
       
        // return Student::all();
        
        $data['students'] = Student::all();
        return view('students.index', $data);

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

      //  return Student::with(['grades' => function($query){
      //      return $query->where('grade', '>=', 90);

      //  }])->get();
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->province = $request['province'];
        $student->zip = $request['zip'];
        $student->birthdate = $request['birthdate'];
        $student->save();

        return redirect()->to('students');
    }

    public function show(string $id)
    {
        // return Student::find($id);

      //  $student = Student::find($id);
      //  return $student->fname . ' ' . $student->lname;

        $student = Student::find($id);
        return $student->fullname;

    }

    public function update(Request $request,string $id)
    {
        $student = Student::find($id);
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->province = $request['province'];
        $student->zip = $request['zip'];
        $student->birthdate = $request['birthdate'];
        $student->save();

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->to('students');
    }

    public function create()
    {
        return view('students.create');
    }

    public function edit(string $id)
    {
        $data['students'] = Student::find($id);
        return view('students.edit', $data);
    }

}
