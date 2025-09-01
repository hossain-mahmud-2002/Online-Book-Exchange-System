<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$book = $result->fetch_assoc();

if ($_POST) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $condition = $_POST['book_condition'];
    $owner = $_POST['owner_name'];
    $contact = $_POST['contact'];

    $conn->query("UPDATE books SET 
        title='$title', author='$author', category='$category', 
        book_condition='$condition', owner_name='$owner', contact='$contact' 
        WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h2>Edit Book</h2>
    <form method="POST">
        <input type="text" name="title" value="<?php echo $book['title']; ?>" required>
        <input type="text" name="author" value="<?php echo $book['author']; ?>" required>
        <input type="text" name="category" value="<?php echo $book['category']; ?>">
        <input type="text" name="book_condition" value="<?php echo $book['book_condition']; ?>">
        <input type="text" name="owner_name" value="<?php echo $book['owner_name']; ?>" required>
        <input type="text" name="contact" value="<?php echo $book['contact']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
