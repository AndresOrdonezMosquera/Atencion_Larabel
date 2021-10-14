<?php

use Illuminate\Database\Seeder;
use App\Model\Persons;

class Person extends Seeder
{
    
    public function run()
    {
        $persons = array(
            [
                'type_Document_id' => 1,
                'Education_Level_id' => 1,
                'name' => 'Andres Felipe',
                'surname' => 'Ordoñez Mosqueraaa',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 5
                
            ],
            [
                'type_Document_id' => 2,
                'Education_Level_id' => 3,
                'name' => 'Andres ',
                'surname' => 'Ordoñez Mosquera',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 4
            ],
            [
                'type_Document_id' => 1,
                'Education_Level_id' => 3,
                'name' => 'Rocio ',
                'surname' => 'Mosquera',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 3
            ],
            [
                'type_Document_id' => 5,
                'Education_Level_id' => 8,
                'name' => 'Yesica ',
                'surname' => 'Mosquera',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 4
            ],
            [
                'type_Document_id' => 2,
                'Education_Level_id' => 6,
                'name' => 'Lina ',
                'surname' => 'Mosquera',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 4
            ],
            [
                'type_Document_id' => 9,
                'Education_Level_id' => 2,
                'name' => 'Dana',
                'surname' => 'Mosquera',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 4
            ],
            [
                'type_Document_id' => 7,
                'Education_Level_id' => 8,
                'name' => 'Yorleny ',
                'surname' => 'Mosquera',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 4
            ],
            [
                'type_Document_id' => 8,
                'Education_Level_id' => 8,
                'name' => 'Juan ',
                'surname' => 'Canacue',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 4
            ],
            [
                'type_Document_id' => 9,
                'Education_Level_id' => 8,
                'name' => 'Emiliano ',
                'surname' => 'Canacue',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 4
            ],
            [
                'type_Document_id' => 9,
                'Education_Level_id' => 8,
                'name' => 'Robin ',
                'surname' => 'Canacue',
                'address' => 'CRA 5BA # 1-34',
                'phone' => '325956320',
                'email' => 'andres@gmail.com',
                'Education_Level_id' => 4
            ],
            
           
        );
        foreach ($persons as $person){
            Persons::updateOrCreate($person);
        }
    }
}
