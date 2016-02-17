<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class TicketNote
 * @package Chernoff\ORM\Models
 */
class TicketNote extends Model
{
    /** @var string */
    protected $table = 'tblticketnotes';

    /**
     * @return BelongsTo
     */
    public function ticket()
    {
        return $this->belongsTo('Chernoff\ORM\Models\Ticket', 'ticketid');
    }
}
