<?php

use Illuminate\Database\Seeder;
use App\Model\Education_Levels;

class Education_Level extends Seeder

{
    public function run()
    {
        $Education_Levels = array( 
            [
                'name' => 'Preescolar'
            ],
            [
                'name' => 'Primaria'
            ],
            [
                'name' => 'Secundaria'
            ],
            [
                'name' => 'Media técnica'
            ],
            [
                'name' => 'Normalista'
            ],
            [
                'name' => 'Tecnico'
            ],
            [
                'name' => 'Tecnológico'
            ],
            [
                'name' => 'Profesional'
            ],
            [
                'name' => 'Posgrado'
            ],
            [
                'name' => 'Ninguno'
            ],
         );
        foreach ($Education_Levels as $Education_Level){
            Education_Levels::updateOrCreate($Education_Level);
        }
    }
}
