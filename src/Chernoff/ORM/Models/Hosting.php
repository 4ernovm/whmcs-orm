<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Hosting
 * @package Chernoff\ORM\Models
 */
class Hosting extends Model
{
    /** @var string */
    protected $table = 'tblhosting';

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Chernoff\ORM\Models\Product', 'packageid');
    }
}
