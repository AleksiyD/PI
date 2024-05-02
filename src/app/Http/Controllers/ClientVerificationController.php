<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Mail\VerifyMailClient;
use App\Models\VerifyEmailClient;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ClientVerificationController extends Controller {
    
    public function initial(Client $client) {
        if($client->isVerified()) {
            return redirect()->route('index'); // with notification
        }
        do {
            $token = Str::random(20);
        } while(VerifyEmailClient::tokenExists($token));
        
        $client->verifyTokens()->delete();
        $client->verifyTokens()->create(['verify_token' => $token]);

        Mail::to($client)->send(new VerifyMailClient($client, route('client.verify.check', $token)));

        return redirect()->route('client.verify.notice', ['client' => $client]);
    }

    public function notice(Client $client) {
        return view('client.verify.notice', ['client' => $client]);
    }

    public function check(VerifyEmailClient $token) {
        $token->client()->update(['email_verified' => true]);
        $token->delete();
        return redirect()->route('index'); // with notification
    }

}
