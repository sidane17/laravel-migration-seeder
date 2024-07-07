@extends('layouts.app')

@section('content')
<?php
$dsn = 'mysql:host=localhost;dbname=laravel-migration-seeder';
$username = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
    echo "Connessione riuscita!";
} catch (PDOException $e) {
    echo 'Connessione fallita: ' . $e->getMessage();
}
?>
@endsection
