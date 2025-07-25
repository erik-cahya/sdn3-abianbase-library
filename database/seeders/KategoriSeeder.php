<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataKategori = [
            [
                'slug' => 'karya-umum',
                'nama_kategori' => 'Karya Umum',
            ],
            [
                'slug' => 'agama',
                'nama_kategori' => 'Agama',
            ],
            [
                'slug' => 'filsafat-&-psikologi',
                'nama_kategori' => 'Filsafat & Psikologi',
            ],
            [
                'slug' => 'ilmu-sosial',
                'nama_kategori' => 'Ilmu Sosial',
            ],
        ];

        foreach ($dataKategori as $row) {
            KategoriModel::create($row);
        }
    }
}
