<?php
class MyController {
    #[Route('GET', '/users/{id}')]
    public function getUser(int $id) {
        /* ... */
    }
}