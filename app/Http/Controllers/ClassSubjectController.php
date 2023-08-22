<?php

namespace App\Http\Controllers;

use App\Models\ClassSubject;
use Illuminate\Http\Request;

class ClassSubjectController extends Controller
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
        $request->validate([
            'subject_id' => 'required',
            'school_id' => 'required',
            'school_class_id' => 'required',
            'teachers' => 'required'
        ]);

        $postArray = $request->all();
        $check = ClassSubject::where('school_class_id', $request->school_class_id)
            ->where('school_id', $request->school_id)
            ->where('subject_id', $request->subject_id)
            ->count();
        if ($check > 0) {
            return redirect()->back()->with('error', 'ClassSubject already exists.');
        } else {
            ClassSubject::create($postArray);
            return redirect()->back()->with('success', 'ClassSubject Added Successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassSubject $classSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassSubject $classSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClassSubject $classSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassSubject $classSubject)
    {
        //
    }
}
