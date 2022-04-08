<?php
        while($dept=mysqli_fetch_assoc($depts)){
    ?>
        <option value="<?php print($dept['dept_name']);?>"><?php print($dept['dept_name']);?>
        </option>
    <?php
        }
    ?>