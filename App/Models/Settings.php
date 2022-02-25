<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {
    protected $table = 'settings';

    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'name_surname',
        'email',
        'password',
        'website_title',
        'website_description',
        'website_keywords',
        'website_author',
        'facebook',
        'twitter',
        'instagram',
        'website',
        'github',
        'firstLogin'
    ];
}

?>