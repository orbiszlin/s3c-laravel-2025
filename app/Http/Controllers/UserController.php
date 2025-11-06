<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    function show(User $user)
    {
        dd($user);
    }

    /**
     * Show the form for creating a new resource.
     */
    function create()
    {
        // Vrátím klasický formulář
        return view('user.create');
    }

    /**
     * Store a newly created resource in DB.
     */
    function store()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    function edit($id)
    {
    }

    /**
     * Update the specified resource in DB.
     */
    function update($id)
    {
    }

    /**
     * Remove the specified resource from DB.
     */
    function destroy($id)
    {
    }
}
