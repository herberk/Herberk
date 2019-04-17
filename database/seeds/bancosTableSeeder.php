<?php

use Illuminate\Database\Seeder;

class bancosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('bancos')->insert(array(
            array( // row #0
                'id' => 1,
                'name' => 'Banco Bice',
                'ctacte' => '10-256+4-25',
                'firman' => 'hermann  ',
                'montoLin' => 100000,
                'empresas_id' => 2,
                'created_at' => '2019-04-06 11:17:09',
                'updated_at' => '2019-04-06 11:17:09',
            ),
            array( // row #1
                'id' => 2,
                'name' => 'Banco Segurity',
                'ctacte' => '26309501',
                'firman' => 'Carl Fingerhuth  ',
                'montoLin' => 0,
                'empresas_id' => 4,
                'created_at' => '2019-04-17 10:51:02',
                'updated_at' => '2019-04-17 10:51:02',
            ),
        ));

    }
}
