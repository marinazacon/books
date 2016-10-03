<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 03/10/16
 * Time: 21.46
 */
namespace Categories\Entity;

interface CategoryInterface
{
    /**
     * This method get the array posted and assign the values to the table
     * object
     *
     * @param array $data
     */
    public function exchangeArray($data);

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param mixed $id
     * @return Category
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getTitle();

    /**
     * @param mixed $title
     * @return Category
     */
    public function setTitle($title);
}