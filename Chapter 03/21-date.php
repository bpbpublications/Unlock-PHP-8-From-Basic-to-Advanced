<?php
echo date('Y-m-d H:i:s');  // Prints the current date and time in YYYY-MM-DD HH:MM:SS format

echo date('l, d F Y');  // Prints, for example: "Monday, 18 July 2023"

echo (new DateTime())->format('Y-m-d');  // Prints the current date in YYYY-MM-DD format
