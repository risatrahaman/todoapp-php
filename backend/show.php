<?php

  require("db.php");
  $result = mysqli_query($conn, "select * from todo");

  if ($result->num_rows > 0) {

      while($row = mysqli_fetch_array($result)) {
?>

      <div id = "task">
        
        <li><?php echo $row[1]; ?></li>

        <form id="form", method="get", action="./backend/delete.php">
          <input type="hidden" name="task_id" value="<?php echo $row[0]; ?>" />
          <button type="submit"> X </a>
        </form>

      </div>

  <?php
      }
    }
?>
