<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TantanganHarianSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        DB::table('tantangan_harian')->insert([
            [
                'judul' => 'Belajar Laravel Dasar',
                'deskripsi' => 'Mempelajari konsep dasar framework Laravel dan membuat migration pertama.',
                'poin' => 50,
                'tanggal_tantangan' => now(),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Membuat CRUD Sederhana',
                'deskripsi' => 'Membuat fitur Create, Read, Update, Delete untuk data tantangan.',
                'poin' => 100,
                'tanggal_tantangan' => now()->addDay(),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Desain Tampilan dengan Blade',
                'deskripsi' => 'Menambahkan halaman tampilan data menggunakan Blade Template.',
                'poin' => 75,
                'tanggal_tantangan' => now()->addDays(2),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Menguji API Laravel',
                'deskripsi' => 'Membuat dan mengetes endpoint API sederhana dengan Postman.',
                'poin' => 120,
                'tanggal_tantangan' => now()->addDays(3),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Deploy ke Localhost',
                'deskripsi' => 'Menjalankan proyek Laravel di XAMPP menggunakan folder htdocs.',
                'poin' => 80,
                'tanggal_tantangan' => now()->addDays(4),
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
