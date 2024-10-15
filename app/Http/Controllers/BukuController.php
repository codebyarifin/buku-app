<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // Method to display the form for creating a new book
    public function create()
    {
        return view('buku.create');
    }

    // Method to store a new book in the database
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|numeric',
            'nomor_isbn' => 'required|numeric|unique:bukus,nomor_isbn',
        ]);

        // Create a new book record in the database
        Buku::create([
            'judul_buku' => $request->input('judul_buku'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahun_terbit' => $request->input('tahun_terbit'),
            'nomor_isbn' => $request->input('nomor_isbn'),
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    // Method to show the list of books (index page)
    public function index()
    {
        $books = Buku::all();
        return view('buku.index', compact('books'));
    }
}

