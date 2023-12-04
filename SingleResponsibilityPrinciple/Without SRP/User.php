<?php
class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function saveToDatabase() {
        // Code to save user data to the database
    }

    public function sendWelcomeEmail() {
        // Code to send a welcome email to the user
    }
}
