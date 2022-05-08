<?php

class Movie {
    private string $title;
    private string $director;
    private string $genre;
    private int $year;


    public function __construct(string $title, string $director, string $genre, int $year) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }
}

$firstmovie = new Movie('The Jacket', 'John Maybury', 'thriller , fantasy', 2005);
$secondmovie = new Movie('The Butterfly Effect', 'Eric Bress, J.- Mackye Gruber', 'thriller, fantasy', 2004);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        var_dump($firstmovie);
    ?>
</body>
</html>