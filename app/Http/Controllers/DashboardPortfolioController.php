<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost:8000/dashboard/portfolio');

        if ($response->successful()) {
            $data = $response->json();

            return view('dashboard.portfolio.index',['portfolios' => $data]);
        } else {
            return "Failed to retrieve data from the API.";
        }
    }

    public function create()
    {
        return view('dashboard.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::post('http://localhost:8000/dashboard/portfolio/create', [
            'judul' => $request->input('judul'),
            'slug' => $request->input('slug'),
            // 'gambar' => $request->input('gambar'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
    
        if ($response->successful()) {
            // Data stored successfully
            return redirect('/dashboard/portfolio')->with('success', 'Data stored successfully.');
        } else {
            // Handle the API error
            return redirect('/dashboard/portfolio')->with('error', 'Failed to store data to the API.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    public function edit($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('dashboard.portfolio.edit',[
            'portfolio' => $portfolio
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $response = Http::post("http://localhost:8000/dashboard/portfolio/update/{$id}", [
            'judul' => $request->input('judul'),
            'gambar' => $request->input('gambar'),
            // 'gambar' => $request->input('gambar'),
            'slug' => $request->input('slug'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        if ($response->successful()) {
            // Data stored successfully
            return redirect('/dashboard/portfolio')->with('success', 'Data update successfully.');
        } else {
            // Handle the API error
            return redirect('/dashboard/portfolio')->with('error', 'Failed to update data to the API.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $response = Http::delete("http://localhost:8000/dashboard/portfolio/delete/{$id}");

        if ($response->successful()) { 
            // Data stored successfully
            return redirect('/dashboard/portfolio')->with('success', 'Data deleted successfully.');
        } else {
            // Handle the API error
            return redirect('/dashboard/portfolio')->with('error', 'Failed to update data to the API.');
        }
    }
}
