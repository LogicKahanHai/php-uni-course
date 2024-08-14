<?php

$library = [
    "Fiction" => [
        "The Great Gatsby" => ["author" => "F. Scott Fitzgerald", "year" => 1925],
        "1984" => ["author" => "George Orwell", "year" => 1949]
    ],
    "Non-Fiction" => [

        "Sapiens" => ["author" => "Yuval Noah Harari", "year" => 2011],
        "Educated" => ["author" => "Tara Westover", "year" => 2018]
    ],
    "Science Fiction" => [

        "Dune" => ["author" => "Frank Herbert", "year" => 1965],
        "Neuromancer" => ["author" => "William Gibson", "year" => 1984]
    ],

];

$library["Fiction"]["To Kill a Mockingbird"] = ["author" => "Harper Lee", "year" => 1967];

foreach($library as $genre => $books) {
    echo "<h1>Genre: $genre</h1>";
    echo "<ul>";
    foreach ($books as $title => $details) {
        echo "<li><b>$title</b> - " . $details["author"] . ", " . $details["year"] . "</li>";
    }

    echo "</ul>";
}

echo "<br><br>";

/**
 * Unset is used to delete any variable. We can also use it 
 * to remove a value from the array.
 * We just pass the variable that we want to delete.
 * 
 * @param mixed $var
 */

unset($library["Non-Fiction"]["Sapiens"]);

echo "<h1>After Deleting: - ";

foreach($library as $genre => $books) {
    echo "<h1>Genre: $genre</h1>";
    echo "<ul>";
    foreach ($books as $title => $details) {
        echo "<li><b>$title</b> - " . $details["author"] . ", " . $details["year"] . "</li>";
    }

    echo "</ul>";
}

?>