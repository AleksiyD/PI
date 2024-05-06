<?php 

namespace App\Traits\Filters;

use Illuminate\Database\Eloquent\Builder;
use App\Traits\Filters\Filter;

trait RequestFilter {

  use Filter;

    public function f_client_id(Builder $query, $field, $id) {
        return $this->defaultQuery($query, $field, $id);
    }

}