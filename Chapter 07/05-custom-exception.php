<?php 
class InvalidUserAgeException extends Exception {
    public function __construct(int $age, int $code = 0, Throwable $previous = null) {
        $message = "Invalid age given: {$age}. Age must be between 18 and 99.";
        parent::__construct($message, $code, $previous);
    }
}


function registerUser(string $name, int $age) : void {
    if ($age < 18 || $age > 99) {
        throw new InvalidUserAgeException($age);
    }
    // User registration continues...
}

try {
    registerUser('Roni', 35);
} catch (InvalidUserAgeException $e) {
    echo $e->getMessage();
}
