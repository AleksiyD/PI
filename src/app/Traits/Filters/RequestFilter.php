<?php 

namespace App\Traits\Filters;

use Illuminate\Database\Eloquent\Builder;
use App\Traits\Filters\Filter;

trait RequestFilter {

  use Filter;

    public function f_client_id(Builder $query, $field, $id) {
        return $this->defaultQuery($query, $field, $id);
    }

    public function f_email_verified(Builder $query, $field, $id) {
      return $query->when($id, function($query) use ($id) {
        $query->select("requests.*")
        ->leftJoin('clients', "clients.id", '=', "requests.client_id")
        ->where("clients.email_verified", $id);
      });
    }

}