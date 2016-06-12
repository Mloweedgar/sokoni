<?php

namespace App\Repositories\Eloquents;

use App\Models\User;

class CustomerRepository {
  public function getById($id) {

    return User::find($id);
  }
}
