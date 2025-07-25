<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
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
                'slug' => 'ilmu-sosial',
                'nama_kategori' => 'Ilmu Sosial',
            ],
            [
                'slug' => 'karya-umum',
                'nama_kategori' => 'Karya Umum',
            ],
            [
                'slug' => 'filsafat-psikologi',
                'nama_kategori' => 'Filsafat & Psikologi',
            ],
            [
                'slug' => 'bahasa',
                'nama_kategori' => 'Bahasa',
            ],
            [
                'slug' => 'ilmu-alam-matematika',
                'nama_kategori' => 'Ilmu Alam & Matematika',
            ],
            [
                'slug' => 'teknologi-ilmu-terapan',
                'nama_kategori' => 'Teknologi & Ilmu Terapan',
            ],
            [
                'slug' => 'kesenian-hiburan-olahraga',
                'nama_kategori' => 'Kesenian, Hiburan & Olahraga',
            ],
            [
                'slug' => 'kesusastraan',
                'nama_kategori' => 'Kesusastraan',
            ],
            [
                'slug' => 'geografi-sejarah',
                'nama_kategori' => 'Geografi & Sejarah',
            ],
        ];

        foreach ($dataKategori as $row) {
            CategoryModel::create($row);
        }
    }
}
