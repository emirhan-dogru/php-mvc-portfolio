<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model {

    protected $table = 'about';
    protected $fillable = ['name_surname', 'email', 'phone', 'birthdate', 'job', 'adress', 'bio', 'short_skills', 'img_url', 'small_img_url' , 'img_path'];
    protected $primaryKey = 'id';
    public $timestamps  = false;
 
}

?>