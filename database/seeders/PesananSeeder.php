<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    
    use HasFactory;

    public function run(): void
    {
        protected $fillable = [
            'nama_pelanggan', 'tanggal_masuk', 'jumlah', 'total_biaya', 'status',  
        ];
    }
}
