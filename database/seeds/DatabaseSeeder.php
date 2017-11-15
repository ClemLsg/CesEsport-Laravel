<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call(UsersTableSeeder::class);
        $this->call('GameTableSeeder');
        $this->call('GameUserSeeder');
        $this->call('CesEsportTeamSeeder');
        $this->call('PlateformeTableSeeder');
        $this->call('PlateformeUserTableSeeder');
        $this->call('RankTableSeeder');
    }
}
