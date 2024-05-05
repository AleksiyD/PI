<?php

namespace App\Traits\Sorters;

use Illuminate\Database\Eloquent\Builder;

trait Sorter {
    public function s_defaultQuery(Builder $query, $field, $direction) {
        return $query->when($direction, function($query, $direction) use ($field) {
            $query->orderBy($this->getTable().'.'.$field, $direction);
        });
    }

    public function s_relationQuery(Builder $query, $field, $foreign) {
        return $query->when($foreign, function($query, $foreign) use ($field) {
            $query->select("{$this->getTable()}.*")
            ->leftJoin($foreign['table'], "{$foreign['table']}.id", '=', "{$this->getTable()}.{$field}")
            ->orderBy("{$foreign['table']}.{$foreign['field']}", $foreign['direction']);
        });
    }

    public function s_convertToIntQuery(Builder $query, $field, $direction) {
        return $query->when($direction, function($query, $direction) use ($field) {
            $query->orderByRaw("cast(NULLIF(regexp_replace({$this->getTable()}.{$field}, '\D', '', 'g'), '') AS integer) {$direction}");
        });
    }

    public function s_convertToIntQueryRelation(Builder $query, $field, $foreign) {
        return $query->when($foreign, function($query, $foreign) use ($field) {
            $query->select("{$this->getTable()}.*")
            ->leftJoin($foreign['table'], "{$foreign['table']}.id", '=', "{$this->getTable()}.{$field}")
            ->orderByRaw("cast(NULLIF(regexp_replace({$foreign['table']}.{$foreign['field']}, '\D', '', 'g'), '') AS integer) {$foreign['direction']}");
        });
    }
}