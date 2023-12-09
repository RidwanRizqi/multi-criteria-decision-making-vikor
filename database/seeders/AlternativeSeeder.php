<?php

namespace Database\Seeders;

use App\Models\Alternative;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternatives = [
            [
                'name' => 'Hilmi'
            ],
            [
                'name' => 'Zaki'
            ],
            [
                'name' => 'Firza'
            ],
            [
                'name' => 'Mirza'
            ],
            [
                'name' => 'H. Pandu'
            ],
            [
                'name' => 'Yuna'
            ],
            [
                'name' => 'Intan'
            ],
            [
                'name' => 'N. Dewi'
            ],
            [
                'name' => 'Alfian'
            ],
            [
                'name' => 'Nina'
            ],
            [
                'name' => 'Bella'
            ],
            [
                'name' => 'Kevin'
            ],
            [
                'name' => 'K. Carlie'
            ],
            [
                'name' => 'Shinta A.'
            ],
            [
                'name' => 'Gatot'
            ],
            [
                'name' => 'Lina'
            ],
            [
                'name' => 'Wawan'
            ],
            [
                'name' => 'N. Tantri'
            ],
            [
                'name' => 'N. Usman'
            ],
            [
                'name' => 'James'
            ],
        ];

        foreach ($alternatives as $alternative) {
            Alternative::create($alternative);
        }
    }
}
