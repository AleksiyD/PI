<?php

namespace App\Http\Livewire\Manage;

use App\Models\Client;
use App\Models\Request;
use Livewire\Component;

class ShowRequestsMore extends Component {

    public array $requests = [];
    public array $request = [];

    protected function getListeners() {
        return [
            'get-more-data' => 'getData'
        ];
    }

    public function render() {
        return view('livewire.manage.show-requests-more');
    }

    public function getData(Request $request) {
        if(!array_key_exists($request->id, $this->requests)) {
            $this->requests[$request->id] = $request->toArray();
            $this->requests[$request->id]['client'] = $request->client->toArray();
        }
        $this->request = $this->requests[$request->id];
        $this->dispatchBrowserEvent('show-request-modal');
    }
}
