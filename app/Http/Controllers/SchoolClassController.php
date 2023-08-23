<?php

namespace App\Http\Controllers;

use App\Models\ClassSubject;
use App\Models\School;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $classes = SchoolClass::where('school_id', $id)->get();
        $school = School::where('id', $id)->first();
        return view('classes', compact('classes', 'school'));
    }

    public function bySchool($id)
    {
        $classes = SchoolClass::where('school_id', $id)->get();
        $school = School::where('id', $id)->first();
        return view('classes', compact('classes', 'school'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $school = School::where('id', $id)->first();
        return view('class.create', compact('school'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => ['required']
        ]);
        $school = School::where('id', $id)->first();
        $postArray = $request->all();
        $postArray['code'] = getAcronym($school->name) . '-' . strtoupper($postArray['name']);
        $postArray['name'] = strtoupper($postArray['name']);
        $check = SchoolClass::where('name', $request->name)->where('school_id', $id)->count();
        if ($check > 0) {
            return redirect()->back()->with('error', 'Class already exists.');
        } else {
            SchoolClass::create($postArray);
            return redirect()->route('class.index', $id)->with('success', 'Class Added Successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, $class)
    {
        $class = SchoolClass::where('id', $class)->first();
        $school = School::where('id', $id)->first();
        $subjects = ClassSubject::where('school_class_id', $class->id)->get();
        return view('class.edit', compact('school', 'class', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolClass $schoolClass)
    {
        //
    }
}
