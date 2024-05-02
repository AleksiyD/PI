<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackFormRequest;
use App\Models\Client;

class FeedbackController extends Controller {

    public function __invoke(StoreFeedbackFormRequest $request) {
        $client = Client::firstOrCreate(
            ['email' => $request->email],
            $request->all()
        );
        $client->requests()->create($request->all());

        return redirect()->route('client.verify.initial', ['client' => $client]);
    }

}
