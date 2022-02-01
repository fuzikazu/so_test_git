<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tweet extends Model
{
    protected $fillable = [
        'user_id', 'tweet',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
