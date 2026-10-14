<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;
use App\Models\Pesanan;

class LayananSeeder extends Seeder
{
    use HasFactory;
    public function run(): void
    {
        protected $fillable = [
            'kode_layanan', 'nama_layanan', 'jenis', 'tarif_per_satuan'
        ];
    }
}
