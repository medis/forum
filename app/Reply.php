<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use Favoritable, RecordsActivity;

    protected $guarded = [];

    protected $with = ['owner', 'favorites'];

    public function owner()
    {
        // Pass user_id because function name is owner rather than user.
        return $this->belongsTo(User::class, 'user_id');
    }
}
