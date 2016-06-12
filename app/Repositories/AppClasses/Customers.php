<?php

namespace App\Repositories\AppClasses;

use App\Repositories\Eloquents\CustomerRepository as Customer;

class Customers {

  protected $customer;

  public function __construct(Customer $customer) {
    $this->customer = $customer;
  }

  public function getOne($id) {
    return $this->customer->getById($id);
  }
}
