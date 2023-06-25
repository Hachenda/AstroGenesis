<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BuildingSeeder;
use Database\Seeders\BuildingLevelSeeder;
use Database\Seeders\ShipSeeder;
use Database\Seeders\ShipLevelSeeder;
use App\Models\User;
use App\Models\Planet;
use App\Models\BuildingPlanet;
use App\Models\ShipPlanet;
use App\Models\Usergame;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BuildingSeeder::class);
        $this->call(BuildingLevelSeeder::class);
        $this->call(ShipSeeder::class);
        $this->call(ShipLevelSeeder::class);
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Jugador',
            'email' => 'test@example.com',
            'password' => '12345678'
        ]);   
        $planet = Planet::createDefault($user->id);
        $buildingPlanet = BuildingPlanet::createDefault($planet->id);
        $userGame = UserGame::createDefault($user->id);
        $shipPlanet = ShipPlanet::createDefault($planet->id);
        for ($i = 1; $i <= 30; $i++) {
                $user = \App\Models\User::factory()->create([
                    'name' => 'CPU '.$i,
                    'email' => 'test'.$i.'@example.com',
                    'password' => '12345678'
                ]);   
            $planet = Planet::createDefault($user->id);
            $buildingPlanet = BuildingPlanet::createDefault($planet->id);
            $userGame = UserGame::createDefault($user->id);
            $shipPlanet = ShipPlanet::createDefault($planet->id);
        }
    }
}
