<?php

namespace App\Traits\Sorters;

use Illuminate\Database\Eloquent\Builder;
use App\Traits\Sorters\Sorter;

trait ClientSorter {

	use Sorter;

	public function s_full_name(Builder $query, $field, $data) {
		return $this->s_defaultQuery($query, $field, $data['direction']);
	}

	public function s_email(Builder $query, $field, $data) {
		return $this->s_defaultQuery($query, $field, $data['direction']);
	}

	public function s_address(Builder $query, $field, $data) {
		return $this->s_defaultQuery($query, $field, $data['direction']);
	}

	public function s_phone(Builder $query, $field, $data) {
		return $this->s_defaultQuery($query, $field, $data['direction']);
	}

	public function s_created_at(Builder $query, $field, $data) {
		return $this->s_defaultQuery($query, $field, $data['direction']);
	}
}
