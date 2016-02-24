<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Domain
 * @package Chernoff\ORM\Models
 */
class Domain extends Model
{
    /** @var string */
    protected $table = 'tbldomains';

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Chernoff\ORM\Models\User', 'userid');
    }
}
