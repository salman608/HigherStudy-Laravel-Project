<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewCourseAdd extends Notification implements ShouldQueue
{
    use Queueable;
    public $course;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($course)
    {
        $this->course=$course;
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
        return (new MailMessage)
                    ->subject('New Course Available')
                    ->greeting('Hello!! Subscriber')
                    ->line('There is a new post, I hope you like it')
                    ->line('Course Title:' .$this->department->name)
                    ->action('view Course', url(route('/confirmCourse ')))
                    ->line('Thank you for using our application!');
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
