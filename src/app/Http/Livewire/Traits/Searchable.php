<?php

namespace App\Http\Livewire\Traits;

trait Searchable {
  
  public $search = '';

  public $perPage = 100;
  public $itemsPage = [10, 25, 50, 100];
  public $itemsAll = true;

  public function updatingFields() {
    $this->resetPage();
  }
  
  public function updatingSearch() {
    $this->resetPage();
  }

  public function mount() {
    $this->search = (string) $this->search;
    $this->search = old('search');
  }

  public function clear() {
    unset($this->sortable);
    $this->sortable = array();
    unset($sortField);
    $this->sortField = '';

    unset($this->fileds);
    $this->fields = array();

    unset($this->search);
    $this->search = '';
  }

}