<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
            'azienda' => 'Treni spa',
            'stazione_di_partenza' => 'Rimini',
            'stazione_di_arrivo' => 'Livorno',
            'orario_di_partenza'=> '2022-10-14 10:00:00',
            'orario_di_arrivo'=> '2022-10-14 13:00:00',
            'codice_treno' => '22',
            'numero_carrozze' => '70',
            'in_orario' => '1',
            'cancellato' => '0'
            ],
            [
                'azienda' => 'Treni spa',
                'stazione_di_partenza' => 'Rimini',
                'stazione_di_arrivo' => 'Livorno',
                'orario_di_partenza'=> '2022-10-14 10:00:00',
                'orario_di_arrivo'=> '2022-10-14 13:00:00',
                'codice_treno' => '22',
                'numero_carrozze' => '70',
                'in_orario' => '1',
                'cancellato' => '0'
            ],
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain -> azienda = $train['azienda'];
            $newTrain -> stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain -> stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain -> orario_di_partenza = $train['orario_di_partenza'];
            $newTrain -> orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain -> codice_treno = $train['codice_treno'];
            $newTrain -> numero_carrozze = $train['numero_carrozze'];
            $newTrain -> in_orario = $train['in_orario'];
            $newTrain -> cancellato = $train['cancellato'];

            $newTrain->save();

        }
    }
}
