<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::get();
        return view('school', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'city' => 'required',
            'state' => 'required'
        ]);
        $postArray = $request->all();
        $check = School::where('name', $request->name)->count();
        if ($check > 0) {
            return redirect()->back()->with('error', 'School already exists.');
        } else {
            School::create($postArray);
            return redirect()->route('school.index')->with('success', 'School Added Successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        return view('school.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, School $school)
    {
        $request->validate([
            'name' => ['required'],
            'city' => 'required',
            'state' => 'required'
        ]);
        $check = School::where('id', '!=', $school->id)->where('name', $request->name)->count();
        if ($check > 0) {
            return redirect()->back()->with('error', 'School already exists.');
        } else {
            $school->name = isset($request->name) ? $request->name : $school->name;
            $school->address = isset($request->address) ? $request->address : $school->address;
            $school->save();
            return redirect()->back()->with('success', 'School Updated Successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        //
    }
}
