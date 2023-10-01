<?php include('header.php') ?>
<br>
<div class="card mt-4">
    <div class="card-header">Add Customer Data</div>
    <div class="card-body">
        <form action="" method="POST" autocomplete="on">
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="<?php if(isset($_POST['isbn'])) {echo $_POST['isbn'];} ?>">
                <div class="text-danger"><?php if (isset($error_isbn)) echo $error_isbn ?></div>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($_POST['title'])) {echo $_POST['title'];} ?>">
                <div class="text-danger"><?php if (isset($error_title)) echo $error_title ?></div>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="none" <?php if (!isset($category)) echo 'selected' ?>>--Select a Category--</option>
                    <option value="Education" <?php if (isset($category) && $category == "Education") echo 'selected' ?>>Education</option>
                    <option value="Fiction" <?php if (isset($category) && $category == "Fiction") echo 'selected' ?>>Fiction</option>
                    <option value="Motivation" <?php if (isset($category) && $category == "Motivation") echo 'selected' ?>>Motivation</option>
                    <option value="Romance" <?php if (isset($category) && $category == "Romance") echo 'selected' ?>>Romance</option>
                </select>
                <div class="text-danger"><?php if (isset($error_category)) echo $error_category ?></div>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author" value="<?php if(isset($_POST['author'])) {echo $_POST['author'];} ?>">
                <div class="text-dannger"><?php if (isset($error_author)) echo $error_author ?></div>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php if(isset($_POST['price'])) {echo $_POST['price'];} ?>">
                <div class="text-danger"><?php if (isset($error_price)) echo $error_price ?></div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            <a href="view_book.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
<?php include('footer.php') ?>