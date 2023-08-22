<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }
    public function updateApi(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->tel = isset($request->tel) ? $request->tel : $user->tel;
        $user->name = isset($request->name) ? $request->name : $user->name;
        $user->city = isset($request->city) ? $request->city : $user->city;
        $user->address = isset($request->address) ? $request->address : $user->address;
        $user->dob = isset($request->dob) ? $request->dob : $user->dob;
        $user->state = isset($request->state) ? $request->state : $user->state;
        $user->lga = isset($request->lga) ? $request->lga : $user->lga;
        $user->gender = isset($request->gender) ? $request->gender : $user->gender;
        $user->save();

        return response()->json([
            'message' => 'Update was Successful',
            'type' => 'success'
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
