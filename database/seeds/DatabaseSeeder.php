<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(Type_Document::class);
        $this->call(Education_Level::class);
        $this->call(Person::class);
        $this->call(Requirement::class);
        $this->call(Answer::class);
        
    }
}

