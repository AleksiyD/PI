<?php

namespace App\Traits\Sorters;

use Illuminate\Database\Eloquent\Builder;
use App\Traits\Sorters\Sorter;

trait RequestSorter {

	use Sorter;

	public function s_client_id(Builder $query, $field, $foreign) {
		$foreign += array(
			'table' => 'clients',
			'field' => 'full_name'
		);
		if(str_contains($query->toSql(), 'left join `clients` on `clients`.`id` = `requests`.`client_id`')) {
			return $this->s_defaultQuery($query, $field, $foreign['direction']);
		}
		return $this->s_relationQuery($query, $field, $foreign);
	}

	public function s_created_at(Builder $query, $field, $data) {
		return $this->s_defaultQuery($query, $field, $data['direction']);
	}
}
