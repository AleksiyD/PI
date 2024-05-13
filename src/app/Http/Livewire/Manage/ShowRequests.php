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
use App\Models\{
    Client,
    Request
};

class ShowRequests extends Component {

    use WithPagination, Sortable, Filterable, Searchable {
        mount as private parent_mount;
    }

    protected $paginationTheme = 'bootstrap';

    public $sortable = [];
    public $fields = [
        'email_verified' => '1'
    ];

    public function mount(Client $client) {
        $this->parent_mount();
        if(!is_null($client->id)) {
            $this->fields = [];
            $this->fields['client_id'] = $client->id;
        }
    }

    public function render() {
        $this->search = (string) $this->search;
        
        $clients = Client::all();

        $requests = Request::with(['client:id,full_name,email,address,phone,email_verified'])
        ->select('id', 'client_id', 'created_at')
        ->filterable($this->fields)
        ->sortable($this->sortable)
        ->relationSearchable($this->search)
        ->paginate($this->perPage);

        $this->emit('render');

        return view('livewire.manage.show-requests', [
            'clients' => $clients,
            'requests' => $requests
        ]);
    }

}
