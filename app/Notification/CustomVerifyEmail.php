<?php
//app/Notifications/CustomVerifyEmail.php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as Notification;

class CustomVerifyEmail extends Notification
{
    /**
     * Get the notification's mail representation.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new \Illuminate\Notifications\Messages\MailMessage)
            ->subject('Please Verify Your Email Address')
            ->line('Please click the button below to verify your email address.')
            ->action('Verify Email Address', $this->verificationUrl($notifiable))
            ->line('Thank you for using our application!')
            ->line('If you did not create an account, no further action is required.');
    }
}
