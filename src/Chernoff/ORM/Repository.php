<?php

namespace Chernoff\ORM;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repository
 * @package Chernoff\ORM
 */
abstract class Repository
{
    /**
     * Contains injected model object.
     *
     * @var Model
     */
    protected $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array(array($this->model, $method), $args);
    }

    /**
     * Returns all records
     *
     * @param array $columns
     * @return array
     */
    public function all($columns = array())
    {
        return $this->model->all($columns)->all();
    }

    /**
     * Returns number of records in the table
     *
     * @return int
     */
    public function count()
    {
        return $this->model->query()->get()->count();
    }

    /**
     * @param $id
     * @param array $columns
     * @return Collection|Model
     */
    public function find($id, array $columns = array())
    {
        return $this->model->find($id, $columns);
    }
}
