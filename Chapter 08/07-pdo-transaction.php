<?php
$pdo = new PDO('mysql:host=localhost;dbname=php_book', 'root', '');

// Start the transaction
$pdo->beginTransaction();

try {
    //Debit €100 from account A
    $stmt1 = $pdo->prepare("UPDATE bank_accounts SET balance=balance-100 WHERE account_id=:accountA");
    $stmt1->execute(['accountA' => 1]);

    //Credit €100 to account B
    $stmt2 = $pdo->prepare("UPDATE bank_accounts SET balance=balance+100 WHERE account_id=:accountB");
    $stmt2->execute(['accountB' => 2]);

    //If both operations are successful, 
    //commit the transaction
    $pdo->commit();
    echo "Transfer successful!";
} catch (\Throwable $th) {
    //If an error occurs, undo the operations
    $pdo->rollback();
    echo "Transfer failed: " . $th->getMessage();
}