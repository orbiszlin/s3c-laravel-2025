<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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
    function store(UserStoreRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('users.index');
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
