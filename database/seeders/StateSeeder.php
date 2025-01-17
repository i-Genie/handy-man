<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => "Abia",'country_id' => 1],
            ['name' => "Abuja Federal Capital Territor",'country_id' => 1],
            ['name' => "Adamawa",'country_id' => 1],
            ['name' => "Akwa Ibom",'country_id' => 1],
            ['name' => "Anambra",'country_id' => 1],
            ['name' => "Bauchi",'country_id' => 1],
            ['name' => "Bayelsa",'country_id' => 1],
            ['name' => "Benue",'country_id' => 1],
            ['name' => "Borno",'country_id' => 1],
            ['name' => "Cross River",'country_id' => 1],
            ['name' => "Delta",'country_id' => 1],
            ['name' => "Ebonyi",'country_id' => 1],
            ['name' => "Edo",'country_id' => 1],
            ['name' => "Ekiti",'country_id' => 1],
            ['name' => "Enugu",'country_id' => 1],
            ['name' => "Gombe",'country_id' => 1],
            ['name' => "Imo",'country_id' => 1],
            ['name' => "Jigawa",'country_id' => 1],
            ['name' => "Kaduna",'country_id' => 1],
            ['name' => "Kano",'country_id' => 1],
            ['name' => "Katsina",'country_id' => 1],
            ['name' => "Kebbi",'country_id' => 1],
            ['name' => "Kogi",'country_id' => 1],
            ['name' => "Kwara",'country_id' => 1],
            ['name' => "Lagos",'country_id' => 1],
            ['name' => "Nassarawa",'country_id' => 1],
            ['name' => "Niger",'country_id' => 1],
            ['name' => "Ogun",'country_id' => 1],
            ['name' => "Ondo",'country_id' => 1],
            ['name' => "Osun",'country_id' => 1],
            ['name' => "Oyo",'country_id' => 1],
            ['name' => "Plateau",'country_id' => 1],
            ['name' => "Rivers",'country_id' => 1],
            ['name' => "Sokoto",'country_id' => 1],
            ['name' => "Taraba",'country_id' => 1],
            ['name' => "Yobe",'country_id' => 1],
            ['name' => "Zamfara",'country_id' => 1],
        ];

        foreach ($states as $state) {
            State::create(attributes: $state);
        }
    }
}
