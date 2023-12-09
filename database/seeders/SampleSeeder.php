<?php

namespace Database\Seeders;

use App\Models\Sample;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        insert using db insert this data
        // INSERT INTO vik_sample(id_alternatif,id_kriteria,nilai)
        //VALUES
        //(1,1,3.11),(1,2,7),(1,3,900),(1,4,424338),
        //(2,1,2.85),(2,2,2),(2,3,2200),(2,4,581604),
        //(3,1,2.98),(3,2,7),(3,3,2200),(3,4,268198),
        //(4,1,3.32),(4,2,2),(4,3,1300),(4,4,928825),
        //(5,1,3.31),(5,2,2),(5,3,900),(5,4,884608),
        //(6,1,3.81),(6,2,3),(6,3,2200),(6,4,734690),
        //(7,1,3.16),(7,2,6),(7,3,2200),(7,4,521320),
        //(8,1,3.94),(8,2,6),(8,3,900),(8,4,437244),
        //(9,1,2.82),(9,2,6),(9,3,2200),(9,4,742284),
        //(10,1,3.24),(10,2,4),(10,3,450),(10,4,853931),
        //(11,1,2.56),(11,2,5),(11,3,1300),(11,4,664221),
        //(12,1,2.61),(12,2,2),(12,3,1300),(12,4,945905),
        //(13,1,3.43),(13,2,2),(13,3,450),(13,4,993462),
        //(14,1,3.49),(14,2,3),(14,3,450),(14,4,879502),
        //(15,1,3.78),(15,2,5),(15,3,450),(15,4,618020),
        //(16,1,3.78),(16,2,2),(16,3,450),(16,4,458457),
        //(17,1,2.56),(17,2,7),(17,3,450),(17,4,895274),
        //(18,1,3.03),(18,2,7),(18,3,2200),(18,4,313455),
        //(19,1,3.55),(19,2,4),(19,3,1300),(19,4,780978),
        //(20,1,3.25),(20,2,6),(20,3,450),(20,4,650742);

        DB::table('samples')->insert([
            [
                'id_alternative' => 1,
                'id_criteria' => 1,
                'value' => 3.11,
            ],
            [
                'id_alternative' => 1,
                'id_criteria' => 2,
                'value' => 7,
            ],
            [
                'id_alternative' => 1,
                'id_criteria' => 3,
                'value' => 900,
            ],
            [
                'id_alternative' => 1,
                'id_criteria' => 4,
                'value' => 424338,
            ],
            [
                'id_alternative' => 2,
                'id_criteria' => 1,
                'value' => 2.85,
            ],
            [
                'id_alternative' => 2,
                'id_criteria' => 2,
                'value' => 2,
            ],
            [
                'id_alternative' => 2,
                'id_criteria' => 3,
                'value' => 2200,
            ],
            [
                'id_alternative' => 2,
                'id_criteria' => 4,
                'value' => 581604,
            ],
            [
                'id_alternative' => 3,
                'id_criteria' => 1,
                'value' => 2.98,
            ],
            [
                'id_alternative' => 3,
                'id_criteria' => 2,
                'value' => 7,
            ],
            [
                'id_alternative' => 3,
                'id_criteria' => 3,
                'value' => 2200,
            ],
            [
                'id_alternative' => 3,
                'id_criteria' => 4,
                'value' => 268198,
            ],
            [
                'id_alternative' => 4,
                'id_criteria' => 1,
                'value' => 3.32,
            ],
            [
                'id_alternative' => 4,
                'id_criteria' => 2,
                'value' => 2,
            ],
            [
                'id_alternative' => 4,
                'id_criteria' => 3,
                'value' => 1300,
            ],
            [
                'id_alternative' => 4,
                'id_criteria' => 4,
                'value' => 928825,
            ],
            [
                'id_alternative' => 5,
                'id_criteria' => 1,
                'value' => 3.31,
            ],
            [
                'id_alternative' => 5,
                'id_criteria' => 2,
                'value' => 2,
            ],
            [
                'id_alternative' => 5,
                'id_criteria' => 3,
                'value' => 900,
            ],
            [
                'id_alternative' => 5,
                'id_criteria' => 4,
                'value' => 884608,
            ],
            [
                'id_alternative' => 6,
                'id_criteria' => 1,
                'value' => 3.81,
            ],
            [
                'id_alternative' => 6,
                'id_criteria' => 2,
                'value' => 3,
            ],
            [
                'id_alternative' => 6,
                'id_criteria' => 3,
                'value' => 2200,
            ],
            [
                'id_alternative' => 6,
                'id_criteria' => 4,
                'value' => 734690,
            ],
            [
                'id_alternative' => 7,
                'id_criteria' => 1,
                'value' => 3.16,
            ],
            [
                'id_alternative' => 7,
                'id_criteria' => 2,
                'value' => 6,
            ],
            [
                'id_alternative' => 7,
                'id_criteria' => 3,
                'value' => 2200,
            ],
            [
                'id_alternative' => 7,
                'id_criteria' => 4,
                'value' => 521320,
            ],
            [
                'id_alternative' => 8,
                'id_criteria' => 1,
                'value' => 3.94,
            ],
            [
                'id_alternative' => 8,
                'id_criteria' => 2,
                'value' => 6,
            ],
            [
                'id_alternative' => 8,
                'id_criteria' => 3,
                'value' => 900,
            ],
            [
                'id_alternative' => 8,
                'id_criteria' => 4,
                'value' => 437244,
            ],
            [
                'id_alternative' => 9,
                'id_criteria' => 1,
                'value' => 2.82,
            ],
            [
                'id_alternative' => 9,
                'id_criteria' => 2,
                'value' => 6,
            ],
            [
                'id_alternative' => 9,
                'id_criteria' => 3,
                'value' => 2200,
            ],
            [
                'id_alternative' => 9,
                'id_criteria' => 4,
                'value' => 742284,
            ],
            [
                'id_alternative' => 10,
                'id_criteria' => 1,
                'value' => 3.24,
            ],
            [
                'id_alternative' => 10,
                'id_criteria' => 2,
                'value' => 4,
            ],
            [
                'id_alternative' => 10,
                'id_criteria' => 3,
                'value' => 450,
            ],
            [
                'id_alternative' => 10,
                'id_criteria' => 4,
                'value' => 853931,
            ],
            [
                'id_alternative' => 11,
                'id_criteria' => 1,
                'value' => 2.56,
            ],
            [
                'id_alternative' => 11,
                'id_criteria' => 2,
                'value' => 5,
            ],
            [
                'id_alternative' => 11,
                'id_criteria' => 3,
                'value' => 1300,
            ],
            [
                'id_alternative' => 11,
                'id_criteria' => 4,
                'value' => 664221,
            ],
            [
                'id_alternative' => 12,
                'id_criteria' => 1,
                'value' => 2.61,
            ],
            [
                'id_alternative' => 12,
                'id_criteria' => 2,
                'value' => 2,
            ],
            [
                'id_alternative' => 12,
                'id_criteria' => 3,
                'value' => 1300,
            ],
            [
                'id_alternative' => 12,
                'id_criteria' => 4,
                'value' => 945905,
            ],
            [
                'id_alternative' => 13,
                'id_criteria' => 1,
                'value' => 3.43,
            ],
            [
                'id_alternative' => 13,
                'id_criteria' => 2,
                'value' => 2,
            ],
            [
                'id_alternative' => 13,
                'id_criteria' => 3,
                'value' => 450,
            ],
            [
                'id_alternative' => 13,
                'id_criteria' => 4,
                'value' => 993462,
            ],
            [
                'id_alternative' => 14,
                'id_criteria' => 1,
                'value' => 3.49,
            ],
            [
                'id_alternative' => 14,
                'id_criteria' => 2,
                'value' => 3,
            ],
            [
                'id_alternative' => 14,
                'id_criteria' => 3,
                'value' => 450,
            ],
            [
                'id_alternative' => 14,
                'id_criteria' => 4,
                'value' => 879502,
            ],
            [
                'id_alternative' => 15,
                'id_criteria' => 1,
                'value' => 3.78,
            ],
            [
                'id_alternative' => 15,
                'id_criteria' => 2,
                'value' => 5,
            ],
            [
                'id_alternative' => 15,
                'id_criteria' => 3,
                'value' => 450,
            ],
            [
                'id_alternative' => 15,
                'id_criteria' => 4,
                'value' => 618020,
            ],
            [
                'id_alternative' => 16,
                'id_criteria' => 1,
                'value' => 3.78,
            ],
            [
                'id_alternative' => 16,
                'id_criteria' => 2,
                'value' => 2,
            ],
            [
                'id_alternative' => 16,
                'id_criteria' => 3,
                'value' => 450,
            ],
            [
                'id_alternative' => 16,
                'id_criteria' => 4,
                'value' => 458457,
            ],
            [
                'id_alternative' => 17,
                'id_criteria' => 1,
                'value' => 2.56,
            ],
            [
                'id_alternative' => 17,
                'id_criteria' => 2,
                'value' => 7,
            ],
            [
                'id_alternative' => 17,
                'id_criteria' => 3,
                'value' => 450,
            ],
            [
                'id_alternative' => 17,
                'id_criteria' => 4,
                'value' => 895274,
            ],
            [
                'id_alternative' => 18,
                'id_criteria' => 1,
                'value' => 3.03,
            ],
            [
                'id_alternative' => 18,
                'id_criteria' => 2,
                'value' => 7,
            ],
            [
                'id_alternative' => 18,
                'id_criteria' => 3,
                'value' => 2200,
            ],
            [
                'id_alternative' => 18,
                'id_criteria' => 4,
                'value' => 313455,
            ],
            [
                'id_alternative' => 19,
                'id_criteria' => 1,
                'value' => 3.55,
            ],
            [
                'id_alternative' => 19,
                'id_criteria' => 2,
                'value' => 4,
            ],
            [
                'id_alternative' => 19,
                'id_criteria' => 3,
                'value' => 1300,
            ],
            [
                'id_alternative' => 19,
                'id_criteria' => 4,
                'value' => 780978,
            ],
            [
                'id_alternative' => 20,
                'id_criteria' => 1,
                'value' => 3.25,
            ],
            [
                'id_alternative' => 20,
                'id_criteria' => 2,
                'value' => 6,
            ],
            [
                'id_alternative' => 20,
                'id_criteria' => 3,
                'value' => 450,
            ],
            [
                'id_alternative' => 20,
                'id_criteria' => 4,
                'value' => 650742,
            ],
        ]);
    }
}
