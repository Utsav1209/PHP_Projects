<?php
if (isset($_POST["create"])) {
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    $sqlinsert = "INSERT INTO posts(date,title,category,summary,content) VALUES ('$date', '$title', '$category', '$summary', '$content')";
    if (mysqli_query($conn, $sqlinsert)) {
        session_start();
        $_SESSION["create"] = "Post added successfully";
        header("Location: index.php");
    } else {
        die("Data is not inserted!");
    }
}
?>

<?php
if (isset($_POST["update"])) {
    include("../connect.php");
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE posts SET title='$title', category='$category', summary='$summary', content='$content', date='$date' WHERE id=$id";
    if (mysqli_query($conn, $sqlUpdate)) {
        session_start();
        $_SESSION["update"] = "Post updated successfully";
        header("Location: index.php");
    } else {
        die("Data is not updated!");
    }
}
