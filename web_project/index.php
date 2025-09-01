<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Book Exchange</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h2>📚 Online Book Exchange</h2>

    <!-- Book Form -->
    <form action="add.php" method="POST" class="book-form">
        <input type="text" name="title" placeholder="Book Title" required>
        <input type="text" name="author" placeholder="Author" required>
        <input type="text" name="category" placeholder="Category">
        <input type="text" name="book_condition" placeholder="Condition (New/Used)">
        <input type="text" name="owner_name" placeholder="Your Name" required>
        <input type="text" name="contact" placeholder="Contact Info" required>
        <button type="submit">Add Book</button>
    </form>

    <!-- Search -->
    <input type="text" id="search" placeholder="Search by title or author...">

    <!-- Book List -->
    <table border="1" cellpadding="10" id="bookTable">
        <tr>
            <th>Title</th><th>Author</th><th>Category</th>
            <th>Condition</th><th>Owner</th><th>Contact</th><th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM books ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['author']}</td>
                    <td>{$row['category']}</td>
                    <td>{$row['book_condition']}</td>
                    <td>{$row['owner_name']}</td>
                    <td>{$row['contact']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> | 
                        <a href='delete.php?id={$row['id']}' onclick='return confirmDelete()'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
