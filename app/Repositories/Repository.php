<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 14.03.2018
 * Time: 22:05
 */

namespace Corp\Repositories;

use Config;

abstract class Repository
{
    protected $model = FALSE;

    public function get()
    {
        $builder = $this->model->select('*');

        return $builder->get();
    }
}