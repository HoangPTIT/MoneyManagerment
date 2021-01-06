<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receive extends Model
{
    use SoftDeletes;

    protected $table = 'receives';

    /**
     * Get the user for the receive
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the type for the receive
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * Get the timeline for the receive
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function timeline()
    {
        return $this->belongsTo(Timeline::class);
    }

    /**
     * Get the target money for the receive
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function targetMoney()
    {
        return $this->belongsTo(TargetMoney::class);
    }
}
