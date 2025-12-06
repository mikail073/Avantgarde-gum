<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymFullSeeder extends Seeder
{
    public function run(): void
    {
        // Залы
        DB::table('gyms')->insert([
            [
                'name' => 'Avangarde Верхний зал',
                'address' => 'Улица Абая, 78',
                'phone' => '87770777777',
            ],
            [
                'name' => 'Avangarde Нижний зал',
                'address' => 'Улица Алтын Адам, 140е',
                'phone' => '87070777777',
            ],
        ]);

        // Тренеры верхнего зала
        DB::table('trainers')->insert([
            ['name' => 'Жуматай Бекзат', 'gym_id' => 1],
            ['name' => 'Турсунов Шахмир', 'gym_id' => 1],
            ['name' => 'Серик Ермек', 'gym_id' => 1],
            ['name' => 'Алиева Милана', 'gym_id' => 1],
            ['name' => 'Ермак Милана', 'gym_id' => 1],
        ]);

        // Тренеры нижнего зала
        DB::table('trainers')->insert([
            ['name' => 'Волынкин Максим', 'gym_id' => 2],
            ['name' => 'Сущенко Артем', 'gym_id' => 2],
            ['name' => 'Гамзиев Юсуф', 'gym_id' => 2],
            ['name' => 'Сакенова Розалина', 'gym_id' => 2],
            ['name' => 'Муратова Айша', 'gym_id' => 2],
        ]);
    }
}

