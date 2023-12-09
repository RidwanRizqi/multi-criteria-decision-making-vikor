<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criterias = [
            [
                'criteria' => 'Biaya SPP',
                'weight' => 0.1429,
                'type' => 'cost'
            ],
            [
                'criteria' => 'Biaya Masuk',
                'weight' => 0.0952,
                'type' => 'cost'
            ],
            [
                'criteria' => 'Batas Tampung Kelas',
                'weight' => 0.0952,
                'type' => 'cost'
            ],
            [
                'criteria' => 'Jumlah Pengajar',
                'weight' => 0.0952,
                'type' => 'benefit'
            ],
            [
                'criteria' => 'Akreditasi TK',
                'weight' => 0.1429,
                'type' => 'benefit'
            ],
            [
                'criteria' => 'Status TK',
                'weight' => 0.0952,
                'type' => 'benefit'
            ],
            [
                'criteria' => 'Menerima Anak Berkebutuhan Khusus',
                'weight' => 0.0953,
                'type' => 'benefit'
            ],
            [
                'criteria' => 'Fasilitas',
                'weight' => 0.0952,
                'type' => 'benefit'
            ],
            [
                'criteria' => 'Lokasi',
                'weight' => 0.1429,
                'type' => 'cost'
            ]
        ];

        foreach ($criterias as $criteria) {
            Criteria::create($criteria);
        }
    }
}
