<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\{
    Sortable,
    Filterable,
    Filters\RequestFilter,
    Sorters\RequestSorter,
    Searchable
};


class Request extends Model {
    use HasFactory;
    use Sortable;
    use RequestSorter;
    use Filterable;
    use RequestFilter;
    use Searchable;

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:m'
    ];

    protected $rel_searchable = [
        'client_id' => [
            'table' => 'clients',
            'field' => 'full_name'
        ]
    ];

    protected $fillable = ['request', 'comment', 'wish', 'created_at'];

    public $filterable = ['client_id', 'email_verified'];

    public $searchable = ['client_id'];

    public $sortable = ['client_id', 'created_at'];

    public function client() {
        return $this->belongsTo(Client::class, 'client_id', 'id', 'clients');
    }
}
