<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 08/11/2017
 * Time: 23:11
 */

class GameTableSeeder extends AcmeSeeder
{
    protected $table = 'games';

    public function getData()
    {
        return [
            ['name' => 'Age of Empires', 'logo' => 'Age_of_Empires.png', 'team' => '0'],
            ['name' => 'Arma 3', 'logo' => 'Arma_3.png', 'team' => '0'],
            ['name' => 'Aucun', 'logo' => 'Aucun.png', 'team' => '0'],
            ['name' => 'Battlefield', 'logo' => 'Battlefield.png', 'team' => '0'],
            ['name' => 'Call Of Duty', 'logo' => 'Call_of_Duty.png', 'team' => '0'],
            ['name' => 'Civilization V', 'logo' => 'Civilization_V.png', 'team' => '0'],
            ['name' => 'Counter Strike', 'logo' => 'Counter_Strike.png', 'team' => '1'],
            ['name' => 'Diablo III', 'logo' => 'Diablo_III.png', 'team' => '0'],
            ['name' => 'Dofus', 'logo' => 'Dofus.png', 'team' => '0'],
            ['name' => 'Dota 2', 'logo' => 'Dota_2.png', 'team' => '1'],
            ['name' => 'Fallout', 'logo' => 'Fallout.png', 'team' => '0'],
            ['name' => 'FIFA', 'logo' => 'FIFA.png', 'team' => '0'],
            ['name' => 'Final Fantasy', 'logo' => 'Final_Fantasy.png', 'team' => '0'],
            ['name' => 'Grand Theft Auto', 'logo' => 'Grand_Theft_Auto.png', 'team' => '0'],
            ['name' => 'Guild Wars', 'logo' => 'Guild_Wars.png', 'team' => '0'],
            ['name' => 'Hearthstone', 'logo' => 'Hearthstone.png', 'team' => '0'],
            ['name' => 'League of Legends', 'logo' => 'League_of_legends.png', 'team' => '1'],
            ['name' => 'Left 4 Dead', 'logo' => 'Left_4_Dead.png', 'team' => '0'],
            ['name' => 'Minecraft', 'logo' => 'Minecraft.png', 'team' => '0'],
            ['name' => 'Payday', 'logo' => 'Payday.png', 'team' => '1'],
            ['name' => 'Skyrim', 'logo' => 'Skyrim.png', 'team' => '0'],
            ['name' => 'Star Wars Battlefront', 'logo' => 'Star_Wars_Battlefront.png', 'team' => '0'],
            ['name' => 'Team Fortress 2', 'logo' => 'Team_Fortress 2.png', 'team' => '0'],
            ['name' => 'Terraria', 'logo' => 'Terraria.png', 'team' => '0'],
            ['name' => 'The Binding of Isaac', 'logo' => 'The_Binding_of_Isaac.png', 'team' => '0'],
            ['name' => 'The Witcher', 'logo' => 'The_Witcher.png', 'team' => '0'],
            ['name' => 'World of Warcraft', 'logo' => 'World_of_Warcraft.png', 'team' => '0']
        ];
    }
}