<?php
class MyController {
    #[API_Endpoint('GET', '/users/{id}', description: 'Fetch a user by ID')]
    public function getUser($id) { /* ... */ }
}
