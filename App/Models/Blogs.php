<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model {
    protected $table = 'blog';
    protected $fillable = ['name', 'content', 'img_url', 'small_img_url', 'img_path', 'created_at'];
    protected $primaryKey = 'id';
    public $timestamps  = false;
 
}

?>