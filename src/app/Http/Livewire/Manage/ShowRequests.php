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
use App\Models\Request;

class ShowRequests extends Component {

    use WithPagination, Sortable, Filterable, Searchable {
        mount as private parent_mount;
    }

    protected $paginationTheme = 'bootstrap';

    public $sortable = [];
    public $fields = [
        'email_verified' => 't'
    ];

    public function mount() {
        $this->parent_mount();
    }

    public function render() {
        $this->search = (string) $this->search;
        
        $clients = Client::all();

        $requests = Request::with(['client:id,full_name,email,address,phone'])
        ->select('id', 'client_id', 'created_at')
        ->filterable($this->fields)
        ->sortable($this->sortable)
        ->searchable($this->search)
        ->paginate($this->perPage);

        $this->emit('render');

        return view('livewire.manage.show-requests', [
            'clients' => $clients,
            'requests' => $requests
        ]);
    }
    
}
