<?php
$message = "<script>malicious()</script>";
echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
//output: &lt;script&gt;malicious()&lt;/script&gt;