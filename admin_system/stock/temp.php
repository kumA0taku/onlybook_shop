<select name="book_id">
    <?php
    while ($book_msqli = mysqli_fetch_assoc($bookID)) {
    ?>
        <option value="<?php print($book_msqli['book_id']); ?>">
            <?php print($book_msqli['book_id']); ?>
        </option>
    <?php
    }
    ?>
</select><br>