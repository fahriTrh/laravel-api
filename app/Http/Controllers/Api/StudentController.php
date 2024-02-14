<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return new StudentResource(true, 'List Of Students', $students);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'nim' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $student = Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
        ]);
        return new StudentResource(true, 'Success to add data', $student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return new StudentResource(true, 'Show One Student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Student $student, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'nim' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $student->update($request->all());
        return new StudentResource(true, 'Success to update data', $student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['status' => true, 'message' => 'success to delete data']);
    }
}
