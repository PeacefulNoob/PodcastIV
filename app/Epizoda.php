<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epizoda extends Model
{
    protected $table = 'epizodas';
    protected $fillable = array('title','sezona_id', 'sc_url', 'desription', 'yt_url','image');


    public function sezona()
    {
        return $this->belongsTo('App\Sezona');
    }
    public function ad()
    {
        return $this->hasMany('App\Ad');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
