<?php
/**
 * Created by PhpStorm.
 * User: remtr
 * Date: 29-Jan-19
 * Time: 11:27 AM
 */
use CodeIgniter\Model;

class Influencer extends Model {

    protected $data=[
        ['id' => '1', 'name'=>'Willis Jackson', 'age'=>'19'],
        ['id' => '2', 'name'=>'Leo Lamoriello', 'age'=>'32'],
        ['id' => '3', 'name'=>'Suzie Kwan', 'age'=>'23'],
        ['id' => '4', 'name'=>'Chantelle Davidson', 'age'=>'21'],
        ['id' => '5', 'name'=>'Subtle Asian Cat', 'age'=>NAN]
    ];

    // Returns a record of the influencer with a passed in ID
    public function find($id = null)
    {
        return $this->data[$id];
    }

    // Returns a record of all the influencers
    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}