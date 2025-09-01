<?php
include 'db.php';

if ($_POST) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $condition = $_POST['book_condition'];
    $owner = $_POST['owner_name'];
    $contact = $_POST['contact'];

    $conn->query("INSERT INTO books (title, author, category, book_condition, owner_name, contact)
                  VALUES ('$title', '$author', '$category', '$condition', '$owner', '$contact')");
}
header("Location: index.php");
?>
