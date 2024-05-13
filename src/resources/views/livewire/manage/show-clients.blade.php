<div>
    @component('layouts.utils.card')
    @include('layouts.utils.search')
    @endcomponent

    @component('layouts.utils.card')
    @include('layouts.utils.paginate')
    @include('layouts.utils.other-filter', ['head' => 'Верификация', 'field' => 'email_verified', 'data' => [
        [
            'option' => 'Верифицирован',
            'value' => '1'
        ],
        [
            'option' => ' Не верифицирован',
            'value' => 'false'
        ]
    ]])

    <div class="col-md-2">
        <button wire:click="clear" class="btn btn-warning py-0 mt-1">Очистить</button>
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
                @include('layouts.utils.sort-head', ['head' => 'ФИО', 'field' => 'full_name'])
                @include('layouts.utils.sort-head', ['head' => 'Email', 'field' => 'email'])
                @include('layouts.utils.sort-head', ['head' => 'Адрес', 'field' => 'address'])
                @include('layouts.utils.sort-head', ['head' => 'Телефон', 'field' => 'phone'])
                @include('layouts.utils.sort-head', ['head' => 'Дата создания', 'field' => 'created_at'])
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $num => $client)
            <tr>
                <th scope="row">{{ $num + $clients->firstItem() }}</td>
                <td scope="col">{{ $client->full_name }}</td>
                <td class="text-nowrap" scope="col">{{ $client->email }} <i class="fa fa-{{ $client->isVerified() ? 'check text-success' : 'times text-danger' }}" aria-hidden="true"></i></td>
                <td scope="col">{{ $client->address }}</td>
                <td scope="col">{{ $client->phone }}</td>
                <td scope="col">{{ $client->created_at }}</td>
                <td scope="col">
                    <a class="text-nowrap" href="{{ route('manage.show-requests-client', ['client' => $client]) }}">
                        <i class="fa fa-eye"></i>
                        Запросы
                    </a>
                </td>
                <td scope="col">
                    <span class="badge bg-warning">{{ $client->requests_count }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @include('layouts.utils.pagination', ['data' => $clients])

</div>

@push('child-script-livewire')

<script src="{{asset('js/livewire/draggable.js')}}"></script>

@endpush