<?php

namespace App\Model;
use App\Model\Requests;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model{

    public function Requests(){
        return $this->belongsTo(Requests::class, 'Request_id', 'id');
    }

    protected $table = 'Answers';

}

