<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::get();
        return view('subject', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required']
        ]);
        $postArray = $request->all();
        $postArray['code'] = 'SUB-' . strtoupper(substr($request->name, 0, 3));
        $check = Subject::where('name', $request->name)->count();
        if ($check > 0) {
            return redirect()->back()->with('error', 'Subject already exists.');
        } else {
            Subject::create($postArray);
            return redirect()->route('subject.index')->with('success', 'Subject Added Successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => ['required']
        ]);
        $check = Subject::where('id', '!=', $subject->id)->where('name', $request->name)->count();
        if ($check > 0) {
            return redirect()->back()->with('error', 'Subject already exists.');
        } else {
            $subject->name = $request->name;
            $subject->code = 'SUB-' . strtoupper(substr($request->name, 0, 3));
            $subject->save();
            return redirect()->back()->with('success', 'Subject Updated Successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
