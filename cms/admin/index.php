<?php
include("templates/header.php");
?>
<div class="post-list w-100 p-3">
    <div class="row">
        <div class="col-md-4 offset-md-7">
            <form class="form-inline" method="GET" action="">
                <div class="form-group mr-sm-2">
                    <select class="form-control" name="category">
                        <option value="">All Categories</option>
                        <?php
                        include("../connect.php");
                        $sqlCategories = "SELECT DISTINCT category FROM posts";
                        $resultCategories = mysqli_query($conn, $sqlCategories);
                        while ($categoryData = mysqli_fetch_assoc($resultCategories)) {
                            $selected = (isset($_GET['category']) && $_GET['category'] == $categoryData['category']) ? 'selected' : '';
                            echo "<option value='" . $categoryData['category'] . "' $selected>" . $categoryData['category'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
    <?php
    if (isset($_SESSION["create"])) {
    ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["create"];
            ?>
        </div>
    <?php
        unset($_SESSION["create"]);
    }
    ?>
    <?php
    if (isset($_SESSION["update"])) {
    ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["update"];
            ?>
        </div>
    <?php
        unset($_SESSION["update"]);
    }
    ?>
    <?php
    if (isset($_SESSION["delete"])) {
    ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION["delete"];
            ?>
        </div>
    <?php
        unset($_SESSION["delete"]);
    }
    ?>

    <table class="table table-boardered">
        <thead>
            <tr>
                <th style="width: 10%;">Publication Date</th>
                <th style="width: 15%;">Title</th>
                <th style="width: 10%;">Category</th>
                <th style="width: 40%;">Article</th>
                <th style="width: 25%;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include("../connect.php");
            $sqlselect = "SELECT * FROM posts";
            if (isset($_GET['category']) && !empty($_GET['category'])) {
                $category = $_GET['category'];
                $sqlselect .= " WHERE category='$category'";
            }
            $result = mysqli_query($conn, $sqlselect);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $data["date"] ?></td>
                    <td><?php echo $data["title"] ?></td>
                    <td><?php echo $data["category"] ?></td>
                    <td><?php echo $data["summary"] ?></td>
                    <td>
                        <a class="btn btn-info" href="view.php?id=<?php echo $data["id"] ?>">View</a>
                        <a class="btn btn-warning" href="edit.php?id=<?php echo $data["id"] ?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include("templates/footer.php");
?>