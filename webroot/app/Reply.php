<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];
    
    public function owner()
    {
        // Pass user_id because function name is owner rather than user.
        return $this->belongsTo(User::class, 'user_id');
    }
}
