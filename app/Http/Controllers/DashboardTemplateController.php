<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost:8000/dashboard/template');

        if ($response->successful()) {
            $data = $response->json();

            return view('dashboard.template.index',['templates' => $data]);
        } else {
            return "Failed to retrieve data from the API.";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.template.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::attach(
            'gambar', 
            $request->file('gambar')->getRealPath(), 
            $request->file('gambar')->getClientOriginalName()
        )->post('http://localhost:8000/dashboard/template/create', [
            'kode_template' => $request->input('kode_template'),
            'nama_template' => $request->input('nama_template'),
            'slug' => $request->input('slug'),
            'deskripsi' => $request->input('deskripsi')
        ]);

        if ($response->successful()) {
            // Data stored successfully
            return redirect('/dashboard/template')->with('success', 'Data stored successfully.');
        } else {
            // Handle the API error
            return redirect('/dashboard/template')->with('error', 'Failed to store data to the API.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Template $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $response = Http::delete("http://localhost:8000/dashboard/template/delete/{$id}");

        if ($response->successful()) {
            // Data stored successfully
            return redirect('/dashboard/template')->with('success', 'Data deleted successfully.');
        } else {
            // Handle the API error
            return redirect('/dashboard/template')->with('error', 'Failed to update data to the API.');
        }
    }
}
