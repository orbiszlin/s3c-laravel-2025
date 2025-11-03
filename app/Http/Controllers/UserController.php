<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $users = [
            (object)["id" => 1, "name" => "John"],
            (object)["id" => 2, "name" => "Jane"],
            (object)["id" => 3, "name" => "Bob"],
        ];

        $users = collect($users);

        return view('user.index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    function show($id)
    {
        echo "User ID: $id";
    }

    /**
     * Show the form for creating a new resource.
     */
    function create()
    {
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
