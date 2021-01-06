<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TargetMoney extends Model
{
    use SoftDeletes;

    protected $table = 'target_money';

    protected $fillable = [
        'content',
    ];

    /**
     * Get the receive for the target money
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receives()
    {
        return $this->hasMany(Receive::class);
    }

    /**
     * Get the timeline for the target money
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timeline()
    {
        return $this->belongsTo(Timeline::class);
    }
}
