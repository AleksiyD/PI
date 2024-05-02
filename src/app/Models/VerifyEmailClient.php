<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifyEmailClient extends Model {

    use HasFactory;

    protected $fillable = ['verify_token'];

    public function getRouteKeyName() {
        return 'verify_token';
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public static function tokenExists(string $token): bool {
        return self::where('verify_token', $token)->exists();
    }
}
