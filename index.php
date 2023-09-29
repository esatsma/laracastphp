<?php
$books = [
    [
        'name' => "Lord of the Rings",
        'author' => 'J.R.R. Tolkien',
        'released' => 1954,
        'purchaseUrl' => 'http://example.com'],
    [
        'name' => "Under the Whispering Door",
        'author' => 'T.J. Klune',
        'released' => 2023,
        'purchaseUrl' => 'http://example.com'],
    [
        'name' => "In the Lives of Puppets",
        'author' => 'T.J. Klune',
        'released' => 2023,
        'purchaseUrl' => 'http://example.com'],
    [
        'name' => "Entangled Lives",
        'author' => 'Merlin Sheldrake',
        'released' => 2020,
        'purchaseUrl' => 'http://example.com'],
];

$name = "Lord of the Rings";
$read = true;

function filterByAuthor($books, $author) {
    $filteredBooks = [];

    foreach ($books as $book) {
        if($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }

    return $filteredBooks;
}


$filter = function ($items, $fn) {
    $filteredItems = [];

    foreach ($items as $item) {
        if($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
};

$filteredBooks = array_filter($books, function ($book) {
    return $book['released'] >= '1920' && $book['released'] < 2022;
});

require "index.view.php";
