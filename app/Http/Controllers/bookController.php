<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\review;
use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = buku::paginate('8');
        return view('user.book', compact('book'));
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
    public function show(string $id)
    {
        $book = buku::findOrFail($id);
        $buku = buku::all();
        $review = review::paginate('6')->where('id_buku', $id);
        return view('user.detail', compact('book', 'buku', 'review'));
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
