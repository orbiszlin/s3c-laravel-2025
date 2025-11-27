<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    function store(Request $request)
    {
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    function edit(User $user)
    {
        // Vrátím editační formulář a předá uživatele z bindingu
        return view('user.edit', compact('user'));
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
