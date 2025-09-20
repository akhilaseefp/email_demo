<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'email' => 'test@example.com', // 👈 put your real email here
            'title' => 'Queue System in Laravel',
            'body' => 'This email is sent using Laravel job queues.'
        ];

        // Dispatch job to queue
        dispatch(new SendEmailJob($details));

        return response()->json(['message' => 'Email job dispatched successfully!']);
    }
}
