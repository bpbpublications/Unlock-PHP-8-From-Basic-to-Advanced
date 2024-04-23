<?php
function getDataType(int|float|string $data): string {
return gettype($data);
}

echo getDataType("Hello");  // Outputs: string
echo getDataType(123);      // Outputs: integer
echo getDataType(123.45);   // Outputs: double