<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::latest()->get();
        return view('dashboard.clients.show-clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.add-client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'company' => '',
            'phone' => 'required|unique:clients,phone',
            'email' => 'required|unique:clients,email',
            'tags' => 'required',
            'country' => 'required',
        ]);

        Client::create($attributes);

        return redirect('/dashboard/clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);
        return view('dashboard.clients.show-client', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
        return view('dashboard.clients.edit-client', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $client = Client::find($id);

        $attributes = $request->validate([
            'name' => 'required',
            'company' => '',
            'phone' => 'required',
            'email' => 'required',
            'tags' => 'required',
            'country' => 'required',
        ]);

        $client->update($attributes);

        return redirect('/dashboard/clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);

        $client->delete();
        return redirect('/dashboard/clients');
    }
}
