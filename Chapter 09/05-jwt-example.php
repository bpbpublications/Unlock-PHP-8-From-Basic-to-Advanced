<?php

class JWT {
    // In production, use a more robust secret key and keep it secure
    // in a .env file for example.
    private string $secretKey = 'yourSecretKey';  

    public function generateToken(array $payload): string {
        $header = \json_encode(['alg' => 'HS256', 'typ' => 'JWT']);
        $base64UrlHeader = \str_replace(
            search: ['+', '/', '='], 
            replace: ['-', '_', ''], 
            subject: \base64_encode($header)
        );
        
        $base64UrlPayload = \str_replace(
            search: ['+', '/', '='], 
            replace: ['-', '_', ''], 
            subject: \base64_encode(json_encode($payload))
        );
        
        $signature = \hash_hmac(
            algo: 'sha256', 
            data: $base64UrlHeader . "." . $base64UrlPayload, 
            key: $this->secretKey, 
            binary: true
        );

        $base64UrlSignature = \str_replace(
            search: ['+', '/', '='], 
            replace: ['-', '_', ''], 
            subject: \base64_encode($signature)
        );
        
        return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
    }

    public function validateToken(string $token): ?array {
        [$header, $payload, $signature] = explode('.', $token);

        $validSignature = hash_hmac(
            algo: 'sha256',
            data: $header . "." . $payload,
            key: $this->secretKey,
            binary: true
        );
        $base64UrlValidSignature = str_replace(
           search: ['+', '/', '='],
           replace: ['-', '_', ''],
           subject: base64_encode($validSignature)
        );

        if ($base64UrlValidSignature !== $signature) {
            return null;
        }

        return json_decode(base64_decode($payload), true);
    }
}
