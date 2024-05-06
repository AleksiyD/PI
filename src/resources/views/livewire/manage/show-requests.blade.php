<div>
    @component('layouts.utils.card')
    @include('layouts.utils.search')
    @endcomponent

    @component('layouts.utils.card')
    @include('layouts.utils.paginate')
    @include('layouts.utils.rel-filter', ['head' => 'Все', 'field' => 'client_id', 'column' => 'full_name', 'relation' => 'client', 'data' => $requests])

    <div class="col-md-2">
        <button wire:click="clear" class="btn btn-primary py-0 mt-1">Очистить</button>
    </div>
    @endcomponent

    @include('layouts.utils.sort-draggable-items')

    <div class="d-flex justify-content-center">
        <div wire:loading class="spinner-grow m-5" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <table class="table table-hover table-striped table-sm mt-3 overflow-auto" wire:loading.remove>
        <thead>
            <tr>
                <th scope="col">
                    #
                </th>
                @include('layouts.utils.sort-head', ['head' => 'ФИО', 'field' => 'client_id'])
                @include('layouts.utils.sort-head', ['head' => 'Дата создания', 'field' => 'created_at'])
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $num => $request)
            <tr>
                <th scope="row">{{ $num + $requests->firstItem() }}</td>
                <td scope="col">                    
                    @component('layouts.utils.dropdown', [
                        'head' => $request->client->full_name,
                        'id' => 'request-client-'.$request->client_id
                    ])
                        <p class="m-0">Почта: {{ $request->client->email }}</p>
                        <p class="m-0">Адрес: {{ $request->client->address }}</p>
                        <p class="m-0">Телефон: {{ $request->client->phone }}</p>
                    @endcomponent
                </td>
                <td scope="col">{{ $request->created_at }}</td>
                {{-- <td wire:click="getMoreData('{{$request->id}}')" scope="col"><i role="button" class="fa fa-eye"></i></td> --}}
                <td wire:click="$emitTo('manage.show-requests-more', 'get-more-data', '{{$request->id}}')" scope="col"><i role="button" class="fa fa-eye"></i></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @livewire('manage.show-requests-more')
    @include('layouts.utils.pagination', ['data' => $requests])

</div>

@push('child-script-livewire')

<script src="{{asset('js/livewire/draggable.js')}}"></script>

@endpush