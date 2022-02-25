<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {
    protected $table = 'portfolio';
    protected $fillable = ['name', 'category_name', 'img_url' , 'small_img_url' , 'img_path'];
    protected $primaryKey = 'id';
    public $timestamps  = false;
 
}

?>