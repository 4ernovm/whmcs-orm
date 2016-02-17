<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Ticket
 * @package Chernoff\ORM\Models
 */
class Ticket extends Model
{
    /** @var string */
    protected $table = 'tbltickets';

    /**
     * @return HasMany
     */
    public function replies()
    {
        return $this->hasMany('Chernoff\ORM\Models\Reply', 'tid');
    }

    /**
     * @return HasMany
     */
    public function notes()
    {
        return $this->hasMany('Chernoff\ORM\Models\TicketNote', 'ticketid');
    }
}
