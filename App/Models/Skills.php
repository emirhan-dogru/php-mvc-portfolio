<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model {
    protected $table = 'skill';
    protected $fillable = ['key', 'value', 'progress'];
    protected $primaryKey = 'id';
    public $timestamps  = false;
 
}

?>