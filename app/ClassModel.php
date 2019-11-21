<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
   public $primaryKey = 'c_id';
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'classe';
}
}
