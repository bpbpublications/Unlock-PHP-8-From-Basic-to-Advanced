<?php

interface Logger {
    public function log(string $message): void;
}

interface Notifier {
    public function sendNotification(string $message): void;
}

class EmailService implements Logger, Notifier {
    public function log(string $message): void{
        echo "Logging: $message";
    }

    public function sendNotification(string $message): void{
        echo "Sending notification: $message";
    }
}
