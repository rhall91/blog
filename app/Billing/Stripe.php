<?php
/*
Filename: Stripe.php
Author: RDH
Contributors: RDH
Created: 8/24/2017
Last Edit: 8/24/2017
Last Edited By: RDH
*/

namespace App\Billing;


class Stripe
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }


}