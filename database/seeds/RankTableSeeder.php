<?php

use Illuminate\Database\Seeder;

class RankTableSeeder extends AcmeSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $table = 'ranks';

    public function getData()
    {
        return [
            ['name'=> 'Larve insignifiante','logo'=> '1-Larve_insignifiante.png'],
            ['name'=> 'Oisillion naif','logo'=> '2-Oisillion_naif.png'],
            ['name'=> 'Ptit Nouveau','logo'=> '3-Ptit_Nouveau.png'],
            ['name'=> 'Joueur du dimanche','logo'=> '4-Joueur_du_dimanche.png'],
            ['name'=> 'Campeur peureux','logo'=> '5-Campeur_peureux.png'],
            ['name'=> 'Teamkiller confirmé','logo'=> '6-Teamkiller_confirmé.png'],
            ['name'=> 'Noob reveur','logo'=> '7-Noob_reveur.png'],
            ['name'=> 'Tueur irregulier','logo'=> '8-Tueur_irregulier.png'],
            ['name'=> 'Protecteur de confiance','logo'=> '9-Protecteur_de_confiance.png'],
            ['name'=> 'Joueur acharne','logo'=> '10-Joueur_acharne.png'],
            ['name'=> 'Adversaire honorable','logo'=> '11-Adversaire_honorable.png'],
            ['name'=> 'Soldat chevronne','logo'=> '12-Soldat_chevronne.png'],
            ['name'=> 'Combatant delite','logo'=> '13-Combatant_delite.png'],
            ['name'=> 'Dynamiteur instoppable','logo'=> '14-Dynamiteur_instoppable.png'],
            ['name'=> 'Eventreur de tank','logo'=> '15-Eventreur_de_tank.png'],
            ['name'=> 'Assassin intouchable','logo'=> '16-Assassin_intouchable.png'],
            ['name'=> 'Cauchemar incontrolable','logo'=> '17-Cauchemar_incontrolable.png'],
            ['name'=> 'Terreur du champ de bataille','logo'=> '18-Terreur_du_champ_de_bataille.png'],
            ['name'=> 'Grand general decoré','logo'=> '19-Grand_general_decoré.png'],
            ['name'=> 'Roi des armees','logo'=> '20-Roi_des_armees.png'],
            ['name'=> 'Sorcier Immortel','logo'=> '21-Sorcier_Immortel.png'],
            ['name'=> 'Dieu de la guerre','logo'=> '22-Dieu_de_la_guerre.png'],
        ];
    }
}
