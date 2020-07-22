<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sezona extends Model
{
    protected $fillable = array('title');
    protected $table = 'sezonas';

    public function epizoda()
    {
        return $this->hasMany('App\Epizoda');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
