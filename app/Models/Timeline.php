<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timeline extends Model
{
    use SoftDeletes;

    protected $table = 'timelines';

    /**
     * Get the receives for the timeline
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receives()
    {
        return $this->hasMany(Receive::class);
    }

    /**
     * Get the target money for the timeline
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function targetMoney()
    {
        return $this->hasMany(TargetMoney::class);
    }
}
