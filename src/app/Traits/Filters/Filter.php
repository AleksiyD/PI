<?php

namespace App\Traits\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

trait Filter {

    public function defaultQuery(Builder $query, $field, $id) {
        return $query->when($id, function($query, $id) use ($field) {
          $query->where($field, $id);
        });
    }

    public function nestedQuery($query, $field, $ids) {
        foreach($ids as $id) {
          $query->orWhere($field, $id);
        }
    }

    public function treeFilterParents_Childs($query, $field, $id) {
      $method = 'where'.((bool) $id ? 'Not' : '').'Null';
      return $query->when($field, function($query) use ($field, $method) {
        $query->{$method}($this->getTable().'.'.$field);
      });
    }

    public function treeFilterRoot_Leaves($query, $field, $id) {
      $ids = array_filter(Arr::flatten(self::whereNotNull('parent_id')->distinct('parent_id')->get(['parent_id'])->toArray()), function($id) {
        return ($id !== null && $id !== false && $id !== '');
      });
      if((bool) $id) {
        return $query->when($field, function($query) use ($ids) {
          $query->whereNotIn($this->getTable().'.id', $ids);
        });
      }
      else {
        return $query->when($field, function($query) use ($field) {
          $query->whereNull($this->getTable().'.'.$field);
        });
      }
    }
}