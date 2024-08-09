<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionEndingNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $expirationDate;

    public function __construct($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function via($notifiable)
    {
        return ['mail']; // You can also use 'database', 'broadcast', etc.
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Your subscription is ending soon.')
            ->line('Expiration Date: ' . $this->expirationDate->toDateString())
            ->action('Renew Subscription', url('/services'))
            ->line('Thank you for using our application!');
    }
}
