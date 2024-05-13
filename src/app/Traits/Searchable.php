<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Searchable {

  public function scopeSearchable(Builder $query, $search) {
    return $query->when($search, function($query) use ($search) {
      $query->where(function($query) use ($search) {
        $search = (string)$search;
        foreach($this->searchable as $field) {
          $query->orWhere($this->getTable().'.'.$field, 'like', '%'.$search.'%');
        }
      });
    });
  }

  public function scopeRelationSearchable(Builder $query, $search) {
    return $query->when($search, function($query) use ($search) {
      foreach($this->rel_searchable as $parent_field => $foreign) {
        if(!str_contains($query->toSql(), "left join `{$foreign['table']}` on `{$foreign['table']}`.`id` = `{$this->getTable()}`.`{$parent_field}`")) {
          $query->select($this->getTable().'.*')
          ->leftJoin($foreign['table'], "{$foreign['table']}.id", '=', "{$this->getTable()}.{$parent_field}");
        }
      }
      return $query->where(function($query) use ($search) {
        foreach($this->rel_searchable as $foreign) {
          $query->orWhere("{$foreign['table']}.{$foreign['field']}", 'like', '%'.$search.'%');
        }
        foreach($this->searchable as $field) {
          $query->orWhere($this->getTable().'.'.$field, 'like', '%'.$search.'%');
        }
      });
      
    });
  }
}
