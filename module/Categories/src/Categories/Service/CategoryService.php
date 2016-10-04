<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 04/10/16
 * Time: 21.22
 */

namespace Categories\Service;

use Zend\Db\TableGateway\TableGateway;

class CategoryService implements CategoryServiceInterface
{
    /**
     * @var TableGateway
     */
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    /**
     * Find a record in the database books/categories
     * @param $id
     */
    public function find($id)
    {
        if (!is_numeric($id))
        {
            return false;
        }
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();

        return $row;
    }
}