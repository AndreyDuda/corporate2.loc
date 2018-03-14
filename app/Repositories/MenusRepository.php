<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 14.03.2018
 * Time: 22:02
 */

namespace Corp\Repositories;

use Corp\Menu;
use Corp\Repositories\Repository;


class MenusRepository extends Repository
{
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }
}