<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class User
 * @package Chernoff\ORM\Models
 */
class User extends Model
{
    /** @var string */
    protected $table = 'tblclients';

    /**
     * @return HasMany
     */
    public function notes()
    {
        return $this->hasMany('Chernoff\ORM\Models\Note', 'userid');
    }
}
