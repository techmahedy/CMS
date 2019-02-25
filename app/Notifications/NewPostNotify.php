<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewPostNotify extends Notification implements ShouldQueue
{
    use Queueable;
    public $post;

    public function __construct($post)
    {
       $this->post = $post;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

  
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Hey , New post availabe')
                    ->greeting('Hello' , 'Subscriber')
                    ->line('There is a new post , hope you will like it')
                    ->line('Post Title : '.$this->post->title)
                    ->action('Read Post' , url(route('post' , $this->post->slug)))
                    ->line('Thank you for being with us!');
    }
  
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
