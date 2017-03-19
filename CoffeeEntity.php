<?php
/**
 * Created by PhpStorm.
 * User: pchome
 * Date: 6/8/15
 * Time: 6:46 PM
 */

class CoffeeEntity {


    public $id;
    public $name;
    public $type;
    public $price;
    public $roast;
    public $country;
    public $review;

    function __construct($id, $name, $type, $price, $roast, $country, $review)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->roast = $roast;
        $this->country = $country;
        $this->review = $review;
    }


}
