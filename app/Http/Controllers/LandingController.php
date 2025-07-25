<?php

namespace App\Http\Controllers;

use App\Models\BooksModel;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data['data_buku'] = BooksModel::join('kategori', 'kategori.id', '=', 'books.id_kategori')->get();
        return view('landing.index', $data);
    }
}
