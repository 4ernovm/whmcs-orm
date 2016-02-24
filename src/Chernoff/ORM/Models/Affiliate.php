<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Affiliate
 * @package Chernoff\ORM\Models
 */
class Affiliate extends Model
{
    /** @var string */
    protected $table = 'tblaffiliates';

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Chernoff\ORM\Models\User', 'clientid');
    }
}
