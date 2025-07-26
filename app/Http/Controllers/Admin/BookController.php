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
        $data['data_buku'] = BooksModel::join('kategori', 'kategori.id', '=', 'books.id_kategori')
            ->select(
                'books.*',
                'kategori.nama_kategori'
            )->get();

        // dd($data['data_buku']);
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

        // Image Upload Handler
        if ($request->gambar_buku === null) {
            $gambarBuku = null;
        } else {
            $gambarBuku = 'foto_' . $request->nama_buku . '.' . $request->gambar_buku->extension();
            $request->gambar_buku->move(public_path('img/gambar_buku'), $gambarBuku);
        }

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
            'image' => $gambarBuku,
        ]);

        $flashData = [
            'judul' => 'Data Berhasil Ditambahkan',
            'pesan' => 'Data Buku Baru Berhasil Ditambahkan',
            'swalFlashIcon' => 'success',
        ];
        return redirect()->route('buku.index')->with('flashData', $flashData);
    }

    public function destroy(string $id)
    {

        BooksModel::destroy($id);

        $flashData = [
            'judul' => 'Delete Success',
            'pesan' => 'Data Buku Telah Dihapus',
            'swalFlashIcon' => 'success',
        ];

        return response()->json($flashData);
    }
}
