<?php

class PlateformeTableSeeder extends AcmeSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $table = 'plateformes';

    public function getData()
    {
        return [

            ['name' => '3DS', 'logo' => '3DS.png'],
            ['name' => 'Atari Lynx', 'logo' => 'Atari_lynx.png'],
            ['name' => 'Atari 2600', 'logo' => 'Atari_2600.png'],
            ['name' => 'Atari 7800', 'logo' => 'Atari_7800.png'],
            ['name' => 'Aucune', 'logo' => 'Aucune.png'],
            ['name' => 'Colecovision', 'logo' => 'Colecovision.png'],
            ['name' => 'Dreamcast', 'logo' => 'Dreamcast.png'],
            ['name' => 'DS', 'logo' => 'DS.png'],
            ['name' => 'Game Gear.png', 'logo' => 'Game_Gear.png'],
            ['name' => 'GameCube', 'logo' => 'GameCube.png'],
            ['name' => 'GB', 'logo' => 'GB.png'],
            ['name' => 'GBA', 'logo' => 'GBA.png'],
            ['name' => 'Master System', 'logo' => 'Master_System.png'],
            ['name' => 'Mega Drive', 'logo' => 'Mega_Drive.png'],
            ['name' => 'N64', 'logo' => 'N64.png'],
            ['name' => 'N-Gage', 'logo' => 'N-Gage.jpg'],
            ['name' => 'PC', 'logo' => 'PC.png'],
            ['name' => 'PS', 'logo' => 'PS.png'],
            ['name' => 'PS2', 'logo' => 'PS2.png'],
            ['name' => 'PS3', 'logo' => 'PS3.png'],
            ['name' => 'PS4', 'logo' => 'PS4.png'],
            ['name' => 'PSP', 'logo' => 'PSP.png'],
            ['name' => 'Saturn', 'logo' => 'Saturn.png'],
            ['name' => 'SNES', 'logo' => 'SNES.png'],
            ['name' => 'Switch', 'logo' => 'Switch.png'],
            ['name' => 'Wii', 'logo' => 'Wii.png'],
            ['name' => 'Wii U', 'logo' => 'Wii U.png'],
            ['name' => 'Xbox', 'logo' => 'Xbox.png'],
            ['name' => 'Xbox One', 'logo' => 'Xbox_One.png'],
            ['name' => 'XBox360', 'logo' => 'XBox360.png'],
        ];
    }
}
