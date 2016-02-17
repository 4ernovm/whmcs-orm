<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Note
 * @package Chernoff\ORM\Models
 */
class Note extends Model
{
    /** @var string */
    protected $table = 'tblnotes';

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Chernoff\ORM\Models\User', 'userid');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function isSticky($query)
    {
        return $query->where('sticky', '=', 1);
    }
}
