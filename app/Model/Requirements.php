<?php

namespace App\Model;

use App\Model\Persons;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    public function Persons(){
        return $this->belongsTo(Persons::class, 'persons_id', 'id');
    }

    protected $table = 'Requirement';

}


