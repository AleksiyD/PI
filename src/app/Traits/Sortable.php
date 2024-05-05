<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Sortable {

  public function scopeSortable(Builder $query, $sortable) {
    if(!empty($sortable)) {
        return $query->when($sortable, function($query, $sortable) {
            foreach($sortable as $field => $data) {
              if(in_array($field, $this->sortable)) {
                call_user_func_array([$this, "s_{$field}"], [$query, $field, $data]);
              }
            }
        });
    }
    return $query;
  }
}