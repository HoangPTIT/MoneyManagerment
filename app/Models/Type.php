<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    protected $table = 'types';

    protected $fillable = [
      'name',
    ];

    /**
     * Get the receives for the type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receives()
    {
        return $this->hasMany(Receive::class);
    }

    /**
     * Get the histories for the type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function histories()
    {
        return $this->hasMany(History::class);
    }
}
