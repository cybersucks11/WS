<?php
include 'db.php';

// Detect action (for HTML forms)
$action = $_POST['action'] ?? $_GET['action'] ?? '';

switch ($action) {

    //  ADD BOOK
    case 'add':
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $price = $_POST['price'];

        $query = "INSERT INTO books (title, author, genre, price) VALUES ($1, $2, $3, $4)";
        $result = pg_query_params($conn, $query, array($title, $author, $genre, $price));

        echo $result ? "Book added successfully" : "Error adding book";
        break;

    //  UPDATE BOOK
    case 'update':
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $price = $_POST['price'];

        $query = "UPDATE books SET title=$1, author=$2, genre=$3, price=$4 WHERE id=$5";
        $result = pg_query_params($conn, $query, array($title, $author, $genre, $price, $id));

        echo $result ? "Book updated successfully" : "Error updating book";
        break;

    // DELETE BOOK
    case 'delete':
        $id = $_POST['id'];

        $query = "DELETE FROM books WHERE id=$1";
        $result = pg_query_params($conn, $query, array($id));

        echo $result ? "Book deleted successfully" : "Error deleting book";
        break;

    // GET BOOK(S)
    case 'view':
        if (isset($_GET['id']) && $_GET['id'] != "") {
            $query = "SELECT * FROM books WHERE id=$1";
            $result = pg_query_params($conn, $query, array($_GET['id']));
        } else {
            $query = "SELECT * FROM books";
            $result = pg_query($conn, $query);
        }

        $books = pg_fetch_all($result);

        if ($books) {
            echo "<h3>Book Details</h3>";
            echo "<table border='1'>
                    <tr>
                        <th>ID</th><th>Title</th><th>Author</th><th>Genre</th><th>Price</th>
                    </tr>";
            foreach ($books as $book) {
                echo "<tr>
                        <td>{$book['id']}</td>
                        <td>{$book['title']}</td>
                        <td>{$book['author']}</td>
                        <td>{$book['genre']}</td>
                        <td>{$book['price']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "No records found";
        }
        break;

    default:
        echo "Invalid action";
}

pg_close($conn);
?>

