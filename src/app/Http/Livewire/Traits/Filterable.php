<?php

namespace App\Http\Livewire\Traits;

trait Filterable {

  public function pushFilterFields($field, $id) {
    $this->fields[$field] = $id;
  }

  public function dropFilterFields($field) {
    unset($this->fields[$field]);
  }

  public function tree() {
    $this->fields['tree'] = !$this->fields['tree'];
  }
  
}