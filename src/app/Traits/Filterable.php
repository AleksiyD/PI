<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Filterable {

  
  public function scopeFilterable(Builder $query, $fields) {
    if(!empty($fields)) {
      return $query->when($fields, function($query, $fields) {
        foreach($fields as $field => $id) {
          if($id != '' && in_array($field, $this->filterable)) {
            call_user_func_array([$this, "f_{$field}"], [$query, $field, $id]);
          }
        }
      });
    }
    return $query;
  }

}