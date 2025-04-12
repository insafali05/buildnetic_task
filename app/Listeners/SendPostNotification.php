<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendPostNotification
{


    public function handle(PostCreated $event): void
    {
        $admins = User::where('role', 'admin')->get();

        foreach ($admins as $admin) {
            Mail::raw("A new post titled '{$event->post->title}' has been created", function ($message) use ($admin) {
                $message->to($admin->email)
                    ->subject('New Post Created');
            });
        }
    }
}
