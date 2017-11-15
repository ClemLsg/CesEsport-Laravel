<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 08/11/2017
 * Time: 23:07
 */

abstract class AcmeSeeder extends Seeder
{

    public function run()
    {
        if (!isset($this->table)){
            throw new Exception('Pas de table spécifiée');
        }

        if (!method_exists($this, 'getData')){
            throw new Exception('Pas de données spécifiée');
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($this->table)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table($this->table)->insert($this->getData());
    }

}