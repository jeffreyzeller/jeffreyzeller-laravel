<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact as ContactModel;

class Contact extends Controller
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
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $contact = new ContactModel();
        $contact->name = $name;
        $contact->email = $email;
        $contact->message = $message;
        $contact->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
