<?php
/**
* LICENSE @NREDBUGS (c) 04-2014
*/

class ListaEstadosSeeder extends Seeder {
 
    public function run(){
 
        DB::table('lista_estados')->insert(array(
                'estados' => 'Michoacan',
                'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
                'estados' => 'Guadalajara',
                'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
                'estados' => 'Monterrey',
                'id_pais' => '1'
        ));

        DB::table('lista_estados')->insert(array(
                'estados' => 'California',
                'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
                'estados' => 'New York',
                'id_pais' => '2'
        ));

        DB::table('lista_estados')->insert(array(
                'estados' => 'Alberta',
                'id_pais' => '3'
        ));

        DB::table('lista_estados')->insert(array(
                'estados' => 'Ontario',
                'id_pais' => '3'
        ));

        DB::table('lista_estados')->insert(array(
                'estados' => 'Nova Scotia',
                'id_pais' => '3'
        ));
    }
 
}