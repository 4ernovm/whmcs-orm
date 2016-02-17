<?php

namespace Chernoff\ORM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Product
 * @package Chernoff\ORM\Models
 */
class Product extends Model
{
    /** @var string */
    protected $table = 'tblproducts';

    /**
     * @return HasMany
     */
    public function hosting()
    {
        return $this->hasMany('Chernoff\ORM\Models\Hosting', 'packageid');
    }
}
