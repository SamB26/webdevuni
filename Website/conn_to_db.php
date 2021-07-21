<?php
try{
$conn = new PDO('mysql:host=localhost;dbname=Assessment', 'sam', '');
} catch (\PDOException $e) {
throw new \PDOException($e->getMessage(), (int) $e->getCode());
}
