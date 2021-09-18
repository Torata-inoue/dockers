<?php
try {
    /// DB接続を試みる
    ///  host: db ro localhost
    $db  = new PDO('mysql:host=db;dbname=local_db', 'phper', 'secret');
    $msg = "MySQL への接続確認が取れました。";
} catch (PDOException $e) {
    $isConnect = false;
    $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
}

echo $msg;