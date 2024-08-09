<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionExpiredNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail']; // You can also use 'database', 'broadcast', etc.
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Your subscription has expired.')
            ->line('Please renew your subscription to continue using our services.')
            ->action('Renew Subscription', url('/services'))
            ->line('Thank you for using our application!');
    }
}
