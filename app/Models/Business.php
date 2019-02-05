<?php
/**
 * Created by visual studio code.
 * User: toni he
 * Date: feb 5 19
 * Time: 11:35
 */
use CodeIgniter\Model;

class Business extends Model {

    protected $data=[
        ['id' => '1', 'name'=>'Leo Lamriello', 'age'=>'32', 'industry'=>'Food'],
        ['id' => '2', 'name'=>'Suzie Kwan', 'age'=>'23', 'industry'=>'Marketing'],
        ['id' => '3', 'name'=>'Tim Hortons', 'age'=>'999', 'industry'=>'Food'],
        ['id' => '4', 'name'=>'Nintendo', 'age'=>'777', 'industry'=>'Entertainment'],
        ['id' => '5', 'name'=>'McDonalds', 'age'=>'64', 'industry'=>'Food']
    ];

    // Returns a record of the businesses with a passed in ID
    public function find($id = null)
    {
        return $this->data[$id];
    }

    // Returns a record of all the businesses
    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}