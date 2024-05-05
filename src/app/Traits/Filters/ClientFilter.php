<?php 

namespace App\Traits\Filters;

use Illuminate\Database\Eloquent\Builder;
use App\Traits\Filters\Filter;

trait ClientFilter {

  use Filter;

    public function f_email_verified(Builder $query, $field, $id) {
        return $this->defaultQuery($query, $field, $id);
    }

}