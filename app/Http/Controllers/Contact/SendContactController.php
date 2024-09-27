<?php

namespace App\Http\Controllers\Contact;

use App\Mail\SupportMessage;
use App\Mail\UserConfirmation;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendContactRequest;

class SendContactController extends Controller
{
    public function __invoke(SendContactRequest $request)
    {

        Mail::to('kamal@leadtonewxt.com')->send(new SupportMessage(
            name: $request->name,
            email: $request->email,
            phone: $request->phone,
            messageText: $request->message
        ));

        Mail::to($request->email)->send(new UserConfirmation(
            name: $request->name,
        ));

        return response()->json(['message' => 'Message Sent Successfully'], 200);
    }
}
