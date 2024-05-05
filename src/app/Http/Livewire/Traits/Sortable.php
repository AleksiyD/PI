<?php

namespace App\Http\Livewire\Traits;

trait Sortable {

    public $sortField;

    public function sortBy($head, $field) {
        $this->sortField = $field;
        $this->pushSortField($head);
    }

    public function swapSortDirection($direction) {
        return $direction === 'asc' ? 'desc' : 'asc';
    }

    public function pushSortField($head) {
        $id = (
            array_key_exists($this->sortField, $this->sortable) ? 
            $this->sortable[$this->sortField]['id'] : (
                (empty(array_key_last($this->sortable))) ? 
                1 : 
                $this->sortable[array_key_last($this->sortable)]['id']+1
            )
        );
        $direction = (
                array_key_exists($this->sortField, $this->sortable) ?
                $this->swapSortDirection($this->sortable[$this->sortField]['direction']) :
                'asc'
        );
        $this->sortable[$this->sortField] = [
            'id' => $id,
            'head' => $head,
            'direction' => $direction
        ];
    }

    public function dropSortField($field) {
        unset($this->sortable[$field]);
        $this->sortField = '';
    }

    public function updateDraggable($orderedIds) {
        foreach($this->sortable as $key => $item) {
            foreach($orderedIds as $id) {
                if($item['id'] == (int) $id['value']) {
                    $this->sortable[$key]['id'] = $id['order'];
                }
            }
        }
        uasort($this->sortable, function($a, $b) {
            return ($a['id'] <=> $b['id']);
        });
    }
}