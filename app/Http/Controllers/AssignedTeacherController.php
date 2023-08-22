<?php

namespace App\Http\Controllers;

use App\Models\AssignedTeacher;
use App\Models\ClassSubject;
use Illuminate\Http\Request;

class AssignedTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subjects = $request->subjects;
        $user_id = $request->user_id;
        $assignedTeacher = new AssignedTeacher;
        foreach ($subjects as $key => $value) {
            $classes = ClassSubject::where('subject_id', $value)->get();
            foreach ($classes as $key => $class) {
                $check = AssignedTeacher::where('class_subject_id', $class->id)->count();
                if ($class->teachers > $check) {
                    $assignedTeacher->user_id = $user_id;
                    $assignedTeacher->class_subject_id = $class->id;
                    $assignedTeacher->save();
                    return redirect()->route('home')->with('success', 'User Assigned to a class and school');
                }
            }
        }

        return redirect()->route('home')->with('error', 'Please try again next time.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AssignedTeacher $assignedTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssignedTeacher $assignedTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssignedTeacher $assignedTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssignedTeacher $assignedTeacher)
    {
        //
    }
}
