<?php namespace TaskManager\System;

class Response {
    public function __construct(private mixed $content = '',
        private int $statusCode = 200,
        private array $headers = []
    ) {}

    public function setHeaders(array $headers): self {
        foreach($headers as $key => $value){
            $this->setHeader($key, $value);
        }

        return $this;
    }

    public function setHeader(string $key, string $value): void {
        $this->headers[$key] = $value;
    }

    public function withJson(array $data, int $statusCode = null): self {
        $this->content = json_encode($data);
        $this->setHeader('Content-Type', 'application/json');
        if ($statusCode) {
            $this->statusCode = $statusCode;
        }
        return $this;
    }

    public function send() : string{
        http_response_code($this->statusCode);
        foreach ($this->headers as $key => $value) {
            header("{$key}: {$value}");
        }
        return $this->content;
    }
}
