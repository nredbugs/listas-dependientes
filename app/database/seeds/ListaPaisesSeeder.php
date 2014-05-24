<?php
/**
* LICENSE @NREDBUGS (c) 04-2014
*/

class ListaPaisesSeeder extends Seeder {
 
    public function run(){
 
        DB::table('lista_paises')->insert(array(
                'pais' => 'Mexico'
        ));

        DB::table('lista_paises')->insert(array(
                'pais' => 'Estados Unidos'
        ));

        DB::table('lista_paises')->insert(array(
                'pais' => 'Canada'
        ));
    }
 
}