<?php

namespace App\Notifications;

use App\Mail\UserProfitUpdate as MailUserProfitUpdate;
use App\Models\Investment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserProfitUpdate extends Notification
{
    use Queueable;

    public $investment;
    public $profit;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Investment $investment, $profit)
    {
        $this->investment = $investment;
        $this->profit = $profit;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailUserProfitUpdate($this->investment, $this->profit))->to($notifiable->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}