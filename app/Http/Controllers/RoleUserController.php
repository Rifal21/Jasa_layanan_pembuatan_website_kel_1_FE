<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Http\Requests\StoreRoleUserRequest;
use App\Http\Requests\UpdateRoleUserRequest;
use Illuminate\Support\Facades\Http;


class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost:8000/dashboard/role');

        if ($response->successful()) {
            $data = $response->json();

            return view('dashboard.roleuser.index',['roleusers' => $data]);
        } else {
            return "Failed to retrieve data from the API.";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.roleuser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleUserRequest $request)
    {

        $response = Http::post('http://localhost:8000/dashboard/role/create', [
            'name_role' => $request->input('name_role')
        ]);

        if ($response->successful()) {
            // Data stored successfully
            return redirect('/dashboard/roleuser')->with('success', 'Data stored successfully.');
        } else {
            // Handle the API error
            return redirect('/dashboard/roleuser')->with('error', 'Failed to store data to the API.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RoleUser $roleUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = RoleUser::findOrFail($id);

        return view('dashboard.roleuser.edit',[
            'roleuser' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleUserRequest $request, $id)
    {
        $response = Http::post("http://localhost:8000/dashboard/role/update/{$id}", [
            'name_role' => $request->input('name_role')
        ]);

        if ($response->successful()) {
            // Data stored successfully
            return redirect('/dashboard/roleuser')->with('success', 'Data update successfully.');
        } else {
            // Handle the API error
            return redirect('/dashboard/roleuser')->with('error', 'Failed to update data to the API.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $response = Http::delete("http://localhost:8000/dashboard/role/delete/{$id}");

        if ($response->successful()) {
            // Data stored successfully
            return redirect('/dashboard/roleuser')->with('success', 'Data update successfully.');
        } else {
            // Handle the API error
            return redirect('/dashboard/roleuser')->with('error', 'Failed to update data to the API.');
        }
    }
}
