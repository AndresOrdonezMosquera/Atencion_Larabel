<?php

use Illuminate\Database\Seeder;
use App\Model\Requirements;

class Requirement extends Seeder
{
    public function run()
    {
        $Requirements = array (
            [  
                'Persons_id' => 1,
                'Description' => 'fallas en el sector salud'
            ],
            [  
                'Persons_id' => 2,
                'Description' => 'no sirve la plataforma'
            ],
            [  
                'Persons_id' => 3,
                'Description' => 'fallas en el internet'
            ],
            [  
                'Persons_id' => 4,
                'Description' => 'no me llego la cita '
            ],
            [  
                'Persons_id' => 5,
                'Description' => 'el examamen no era'
            ],
            [  
                'Persons_id' => 6,
                'Description' => 'fallas con la aplicacion salud'
            ],
            [  
                'Persons_id' => 7,
                'Description' => 'el doctor no llego a la cita'
            ],
            [  
                'Persons_id' => 8,
                'Description' => 'fallas en el sector salud'
            ],
            [  
                'Persons_id' => 9,
                'Description' => 'fallas en el sector salud'
            ],
            [  
                'Persons_id' => 10,
                'Description' => 'fallas en el sector salud'
            ]
        );
            foreach ($Requirements as $Requirement){
                Requirements::updateOrCreate($Requirement);
            }
    }
}


