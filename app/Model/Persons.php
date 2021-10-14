<?php

namespace App\Model;

use App\Model\Type_Documents;
use App\Model\Education_Levels;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    public function Type_Document(){
        return $this->belongsTo(Type_Documents::class, 'type_Document_id', 'id');
    }

    public function Education_Level(){
        return $this->belongsTo(Education_Levels::class, 'Education_Level_id', 'id');
    }

    protected $table = 'persons';
}
