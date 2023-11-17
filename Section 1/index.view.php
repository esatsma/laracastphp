<!doctype html>
<html lang="en">
<head>
    <title>Document</title>

    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

<h1>You have <?php if (!$read) {
        echo "not";
    } ?> read <?= "$name"; ?>
</h1>

<h2>Arrays</h2>
<ul>
    <?php foreach ($books as $book) : ?>

        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['released'] ?>)
            </a>
        </li>

    <?php endforeach; ?>

</ul>

<h2>Functions and Filters</h2>

<ul>
    <?php foreach (filterByAuthor($books, 'J.R.R. Tolkien') as $book) : ?>

        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['released'] ?>)
            </a>
        </li>

    <?php endforeach; ?>

</ul>

<h2>Lambda Functions</h2>

<ul>
    <?php foreach ($filteredBooks as $book) : ?>

        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['released'] ?>)
            </a>
        </li>

    <?php endforeach; ?>

</ul>
</body>
</html>