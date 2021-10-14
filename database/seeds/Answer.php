<?php

use Illuminate\Database\Seeder;
use App\Model\Answers;

class Answer extends Seeder
{
    public function run()
    {
        $Answers = array (
            [  
                'Request_id' => 1,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ],
            [  
                'Request_id' =>2 ,
                'Description' => 'Problemas',
                'Observation'=> 'clase reprogramada'
            ],
            [  
                'Request_id' => 3,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ],
            [  
                'Request_id' => 4,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ],
            [  
                'Request_id' => 5,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ],
            [  
                'Request_id' => 6,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ],
            [  
                'Request_id' => 7,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ],
            [  
                'Request_id' => 8,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ],
            [  
                'Request_id' => 9,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ],
            [  
                'Request_id' => 10,
                'Description' => 'Problemas',
                'Observation'=> 'no funciona la red'
            ]
        );
            foreach ($Answers as $Answer){
                Answers::updateOrCreate($Answer);
            }
    }
}

