<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dss = [
            [
                'name' => 'Anthracnose des fruits du fraisier',
                'description' => 'Le champignon responsable de l\'anthracnose du fraisier s\'appelle Colletotrichum fragariae. Maladie se manifestant par des lésions rondes de 1 à 2 cm sur les fraises, avec le centre de la tache enfoncée en « coup de pouce».',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Oïdium du melon',
                'description' => 'L\'oïdium est une maladie récurrente des cucurbitacées. Sur melon, deux espèces peuvent être observée et parfois simultanément : il s\'agit d\'Erysiphe cichoracearumet deSphaerotheca fuliginea',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Mildiou de la pomme de terre',
                'description' => 'Le mildiou de la pomme de terre est une maladie cryptogamique causée par un oomycète de la famille des Pythiaceae, Phytophthora infestans, micro-organisme eucaryote longtemps considéré comme un champignon.',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Rouille du pommier',
                'description' => 'Son apparition est favorisée par l\'humidité et la chaleur, c\'est alors que l\'on observe des tâches plus ou moins circulaires, jaunâtres ou rougeâtres sur les feuilles.',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Mildiou de la tomate',
                'description' => 'Si la partie supérieure de la feuille de tomate commence à noircir, votre plant tomates est infecté par le mildiou. Lorsqu\'un plant de tomates est touché par le mildiou, la partie supérieure du limbe (feuilles) va commencer à noircir tandis que le verso, lui, va se couvrir d\'une pellicule poudreuse et blanchâtre.',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
            [
                'name' => 'Mildiou de la vigne',
                'description' => 'La rafle prend une coloration rouge brunâtre et se déforme en crosse. Les inflorescences peuvent être totalement détruites : elles se dessèchent et finissent par tomber.',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],
        ];

        DB::table('dss')->insert($dss);
    }
}
