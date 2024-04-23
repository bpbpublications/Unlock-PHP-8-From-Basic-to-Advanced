<?php

class Tasks {
    #[Route('/api/task', methods: ['GET'])]
    public function getTask(): Response {
        // fetch and return task
    }
}

class AuthorizationMiddleware {
    public function handle(Request $request, Closure $next): Response {
        if (!$request->hasHeader('Authorization')) {
            return new Response('Unauthorized', 401);
        }
        return $next($request);
    }
}

class ErrorResponse {
    public function __construct(
        public int $statusCode,
        public string $message
    ) {}

    public function toJson(): string {
        return json_encode([
            'error' => $this->message,
            'status_code' => $this->statusCode,
        ], JSON_THROW_ON_ERROR);
    }
}
