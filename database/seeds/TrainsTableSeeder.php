<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
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
                "agency" => "Italo",
                "departure_station" => "Napoli Centrale",
                "arrival_station" => "Firenze Santa Maria Novella",
                "departure_time" => "08:00",
                "arrival_time" => "11:00",
                "train_code" => "842047596432",
                "number_carriages" => "18",
                "in_time" => "1",
                "deleted" => "0",
            ],
            [
                "agency" => "Trenitalia",
                "departure_station" => "Roma Termini",
                "arrival_station" => "Reggio Calabria",
                "departure_time" => "11:00",
                "arrival_time" => "18:00",
                "train_code" => "345693029432",
                "number_carriages" => "10",
                "in_time" => "0",
                "deleted" => "0",
            ],
        ];

        foreach ($trains as $train){
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_carriages = $train['number_carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->deleted = $train['deleted'];
            $newTrain->save();
        }
    }
}
