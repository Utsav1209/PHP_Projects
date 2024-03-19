<?php
include("templates/header.php");
?>

<?php
$id = $_GET['id'];
if ($id) {
    include('../connect.php');
    $sqlDelete = "DELETE FROM posts WHERE id=$id";
    if (mysqli_query($conn, $sqlDelete)) {
        session_start();
        $_SESSION["delete"] = "Post deleted successfully";
        header("Location:index.php");
    } else {
        die("Data is not deleted");
    }
} else {
    echo "Post Not Found";
}

?>
<?php
include("templates/footer.php");
?>