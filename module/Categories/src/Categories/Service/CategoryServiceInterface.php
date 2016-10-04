<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 04/10/16
 * Time: 21.35
 */
namespace Categories\Service;

interface CategoryServiceInterface
{
    /**
     * Find a record in the database books/categories
     * @param $id
     */
    public function find($id);
}