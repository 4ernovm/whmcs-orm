<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Invoice
 * @package Chernoff\ORM\Models
 */
class Invoice extends Model
{
    /** @var string */
    protected $table = 'tblinvoices';

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Chernoff\ORM\Models\User', 'userid');
    }
}
