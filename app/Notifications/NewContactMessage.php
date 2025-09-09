<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContactMessage extends Notification
{
    use Queueable;

    protected $contact;

    /**
     * Create a new notification instance.
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail']; // tu peux aussi ajouter 'database'
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('📩 Nouveau message de contact')
            ->greeting('Bonjour ' . $notifiable->name)
            ->line('Vous avez reçu un nouveau message via le formulaire de contact.')
            ->line('Nom : ' . $this->contact->name)
            ->line('Email : ' . $this->contact->email)
            ->line('Message : ' . $this->contact->message)
            ->action('Voir le site', url('/'))
            ->line('Merci d’utiliser notre application !');
    }
}
