<?php

use Illuminate\Database\Seeder;
use App\Model\Type_Documents;

class Type_Document extends Seeder

{
    public function run()
    {
        $Type_Documents = array (
            [
                'code' => "1",
                'name' => 'Cédula de ciudadaniaaaa'
            ],
            [
                'code' => "2",
                'name' => 'Cédula de extranjería colombiana'
            ],
            [
                'code' => "3",
                'name' => 'Cédula extranjera'
            ],
            [
                'code' => "4",
                'name' => 'Documento extranjero'
            ],
            [
                'code' => "5",
                'name' => 'Pasaporte'
            ],
            [
                'code' => "6",
                'name' => 'Registro civil'
            ],
            [
                'code' => "7",
                'name' => 'Tarjeta de identidad'
            ],
            [
                'code' => "8",
                'name' => 'Carnet'
            ],
            [
                'code' => "9",
                'name' => 'Licencia de Conducir'
            ],
            [
                'code' => "10",
                'name' => 'Registro de matrimonio'
            ],

        );

        foreach ($Type_Documents as $Type_Document){
            Type_Documents::updateOrCreate($Type_Document);
        }
    }
}
