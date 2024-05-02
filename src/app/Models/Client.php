<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model {
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'address', 'phone'];

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
