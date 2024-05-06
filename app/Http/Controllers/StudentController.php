<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('students.auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            //'age' => 'integer|nullable',
            'gender' => 'required|string',
            'password' => 'required',
            'email' => 'required|regex:/@std\.mubs\.ug$/i|unique:students',
            'university_id' => 'required|string|unique:students',
            'major' => 'required|string',
            'year' => 'required|string',
            //'contact_number' => 'string|nullable',
            //'address' => 'string|nullable',
        ]);
        $age = isset($validatedData['age']) ? $validatedData['age'] : null;
        $contact_number = isset($validatedData['contact_number']) ? $validatedData['contact_number'] : null;
        $address = isset($validatedData['address']) ? $validatedData['address'] : null;

        // Generate username from name and email
        // $username = strtolower(str_replace(' ', '', $validatedData['name'])) . '_' . explode('@', $validatedData['email'])[0];
        $username = Str::random(8);

        // Create a new Student instance
        $student = new Student();
        $student->name = $validatedData['name'];
        $student->username = $username;
        $student->password = Hash::make($validatedData['password']);
        //$student->age = $validatedData['age'];
        $student->gender = $validatedData['gender'];
        $student->email = $validatedData['email'];
        $student->university_id = $validatedData['university_id'];
        $student->major = $validatedData['major'];
        $student->year = $validatedData['year'];
        //$student->contact_number = $validatedData['contact_number'];
        //$student->address = $validatedData['address'];

        // Save the student record
        if ($student->save()) {
            toastr()->success('Account created Successfully');
        } else {
            toastr()->error('Account creation Unsuccessful');
        }

        // Redirect back to the previous page
        return route('welcome');
    }

    public function show(Student $student)
    {
        //
    }
    public function edit(Student $student)
    {
        //
    }
    public function update(Request $request, Student $student)
    {
        //
    }
    public function destroy(Student $student)
    {
        //
    }
}
