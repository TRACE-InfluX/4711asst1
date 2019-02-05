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
        ['id' => '1', 'name'=>'Willis Jackson', 'age'=>'19', 'gender'=> 'M'],
        ['id' => '2', 'name'=>'Dolan Lamoriello', 'age'=>'32', 'gender'=> 'M'],
        ['id' => '3', 'name'=>'Suzy Bae', 'age'=>'23', 'gender'=> 'F'],
        ['id' => '4', 'name'=>'Chantelle Davidson', 'age'=>'21', 'gender'=> 'F'],
        ['id' => '5', 'name'=>'Elias Pettersson', 'age'=>'20', 'gender'=> 'M'],
        ['id' => '6', 'name'=>'Aaron Vong', 'age'=>'25', 'gender'=> 'M'],
        ['id' => '7', 'name'=>'Billy Bob Karlsson', 'age'=>'29', 'gender'=> 'M']
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