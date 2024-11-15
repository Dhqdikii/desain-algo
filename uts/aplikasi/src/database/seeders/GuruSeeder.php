<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::create([
            'nama' => 'Ahmad Fauzi',
            'nip' => '123456789',
            'mata_pelajaran' => 'Matematika',
            'alamat' => 'Jl. Merdeka No.1',
            'nomor_telepon' => '08123456789',
        ]);

        Guru::create([
            'nama' => 'Siti Aminah',
            'nip' => '987654321',
            'mata_pelajaran' => 'Bahasa Indonesia',
            'alamat' => 'Jl. Kemenangan No.2',
            'nomor_telepon' => '08987654321',
        ]);

        Guru::create([
            'nama' => 'Budi Santoso',
            'nip' => '112233445',
            'mata_pelajaran' => 'Fisika',
            'alamat' => 'Jl. Sudirman No.3',
            'nomor_telepon' => '08112233445',
        ]);

        // Tambahkan data guru lain jika diperlukan
    }
}
