<?php
class Contact
{
    protected string $subject;
    protected string $message;
    protected string $mail;

    public function __construct(array $contact)
    {
        $this->subject = $contact['subject'];
        $this->message = $contact['message'];
        $this->mail = $contact['mail'];
    }
}
