<?php

namespace Chernoff\ORM;

/**
 * Class Manager
 * @package Chernoff\ORM
 */
abstract class Manager
{
    /** @var Repository */
    protected $repository;

    /**
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
}
