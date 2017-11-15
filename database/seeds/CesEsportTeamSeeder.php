<?php

class CesEsportTeamSeeder extends AcmeSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $table = 'cesi_teams';

    public function getData()
    {
        return [
            ['name' => 'Counter Strike'],
            ['name' => 'League of Legends'],
            ['name' => 'Hearthstone'],
        ];
    }
}
