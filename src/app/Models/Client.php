<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\{
    Sortable,
    Filterable,
    Filters\ClientFilter,
    Sorters\ClientSorter,
    Searchable
};

class Client extends Model {
    use HasFactory;
    use Sortable;
    use ClientSorter;
    use Filterable;
    use ClientFilter;
    use Searchable;

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:m'
    ];

    protected $fillable = ['full_name', 'email', 'address', 'phone'];

    public $filterable = ['email_verified'];

    public $searchable = ['full_name', 'email', 'phone'];

    public $sortable = ['full_name', 'email', 'email_verified', 'address', 'phone', 'created_at'];

    public function requests() {
        return $this->hasMany(Request::class);
    }

    public function isVerified() {
        return $this->email_verified;
    }

    public function verifyTokens() {
        return $this->hasMany(VerifyEmailClient::class);
    }

    public function getVerifyToken() {
        return $this->verifyTokens()->orderBy('created_at', 'desc')->first();
    }
}
