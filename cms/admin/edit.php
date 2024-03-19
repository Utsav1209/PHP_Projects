<?php
include("templates/header.php");
?>

<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];
    include("../connect.php");
    $sqlEdit = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($conn, $sqlEdit);
    if (!$result || mysqli_num_rows($result) == 0) {
        echo "No Post Found";
    }
} else {
    echo "No Post Found";
}
?>

<?php if (isset($result) && mysqli_num_rows($result) > 0) : ?>
    <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
        <form action="process.php" method="post">
            <?php while ($data = mysqli_fetch_array($result)) : ?>
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="title" id="" placeholder="Enter Title:" value="<?php echo $data['title']; ?>">
                </div>
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="category" id="" placeholder="Enter Category:" value="<?php echo $data['category']; ?>">
                </div>
                <div class="form-field mb-4">
                    <textarea name="summary" class="form-control" id="" cols="30" rows="10" placeholder="Enter Summary:"><?php echo $data['summary']; ?></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Enter Post:"><?php echo $data['content']; ?></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("d/m/Y"); ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="submit" name="update">
                </div>
            <?php endwhile; ?>
        </form>
    </div>
<?php endif; ?>

<?php
include("templates/footer.php");
?>