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
                'criteria' => 'Indeks Prestasi',
                'weight' => 45,
                'type' => 'benefit'
            ],
            [
                'criteria' => 'Semester',
                'weight' => 30,
                'type' => 'cost'
            ],
            [
                'criteria' => 'Daya listrik',
                'weight' => 10,
                'type' => 'cost'
            ],
            [
                'criteria' => 'Jumlah tagihan listrik',
                'weight' => 15,
                'type' => 'cost'
            ]
        ];

        foreach ($criterias as $criteria) {
            Criteria::create($criteria);
        }
    }
}
