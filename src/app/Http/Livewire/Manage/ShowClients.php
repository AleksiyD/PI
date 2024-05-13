<?php

namespace App\Http\Livewire\Manage;

use Livewire\{
    Component,
    WithPagination
};

use App\Http\Livewire\Traits\{
    Sortable,
    Searchable,
    Filterable
};
use App\Models\Client;

class ShowClients extends Component {

    use WithPagination, Sortable, Filterable, Searchable {
        mount as private parent_mount;
    }

    protected $paginationTheme = 'bootstrap';

    public $sortable = [];
    public $fields = [
        'email_verified' => '1'
    ];

    public function mount() {
        $this->parent_mount();
    }

    public function render() {
        $this->search = (string) $this->search;

        $clients = Client::select('id', 'full_name', 'email', 'email_verified', 'address', 'phone', 'created_at')
        ->withCount('requests')
        ->filterable($this->fields)
        ->sortable($this->sortable)
        ->searchable($this->search)
        ->paginate($this->perPage);

        $this->emit('render');

        return view('livewire.manage.show-clients', [
            'clients' => $clients
        ]);
    }

}
