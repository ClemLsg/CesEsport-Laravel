<?php

class UsersTableSeeder extends AcmeSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $table = 'users';

    public function getData()
    {
        return [
          ['name'=> 'Darkdady', 'email'=> 'thedarkdady@gmail.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Darkdady'), 'points'=>'1000'],
            ['name'=> 'Mouloud', 'email'=> 'mouloud@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('mouloud'), 'points'=>'100'],
            ['name'=> 'Denis', 'email'=> 'denis@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Denis'), 'points'=>'10'],
            ['name'=> 'Kevin', 'email'=> 'kevin@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Kevin'), 'points'=>'1'],
            ['name'=> 'Jean', 'email'=> 'jean@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Jean'), 'points'=>'14'],
            ['name'=> 'David', 'email'=> 'david@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('David'), 'points'=>'142'],
            ['name'=> 'Claude', 'email'=> 'claude@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Claude'), 'points'=>'500'],
            ['name'=> 'Michel', 'email'=> 'michel@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Michel'), 'points'=>'300'],
            ['name'=> 'Gabi', 'email'=> 'gabi@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Gabi'), 'points'=>'3000'],
            ['name'=> 'Enzo', 'email'=> 'enzo@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Enzo'), 'points'=>'176'],
            ['name'=> 'Kebab', 'email'=> 'kebab@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Kebab'), 'points'=>'204'],
            ['name'=> 'Didier', 'email'=> 'didier@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Didier'), 'points'=>'2254'],
            ['name'=> 'Jambon', 'email'=> 'jambon@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('Jambon'), 'points'=>'4315'],
            ['name'=> 'Hamburger', 'email'=> 'hamburger@example.com','bio'=> 'Entrez votre bio ici', 'password'=> Hash::make('hamburger'), 'points'=>'132'],

        ];
    }
}
