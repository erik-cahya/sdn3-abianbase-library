<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BooksModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // $data['kategori'] = CategoryModel::get();
        $data['data_buku'] = BooksModel::join('kategori', 'kategori.id', '=', 'books.id_kategori')->get();
        return view('admin.books.index', $data);
    }

    public function create()
    {
        $data['kategori'] = CategoryModel::get();
        return view('admin.books.create', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());

        BooksModel::create([
            'nama_buku' => $request->nama_buku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tempat_terbit' => $request->tempat_terbit,
            'tahun_cetak' => $request->tahun_cetak,
            'kelas' => $request->kelas,
            'asal_buku' => $request->asal_buku,
            'jumlah' => $request->jumlah,
            'tahun_penerimaan' => $request->tahun_penerimaan,
            'id_kategori' => $request->kategori_buku,
        ]);

        $flashData = [
            'judul' => 'Data Berhasil Ditambahkan',
            'pesan' => 'Data Buku Baru Berhasil Ditambahkan',
            'swalFlashIcon' => 'success',
        ];
        return redirect()->route('buku.index')->with('flashData', $flashData);
    }
}
