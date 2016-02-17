<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Reply
 * @package Chernoff\ORM\Models
 */
class Reply extends Model
{
    /** @var string */
    protected $table = 'tblticketreplies';

    /**
     * @return BelongsTo
     */
    public function ticket()
    {
        return $this->belongsTo('Chernoff\ORM\Models\Ticket', 'tid');
    }
}
