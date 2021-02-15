<html>
  <head>
  </head>
  <body>
    <h1>Leave a Comment</h1>

    <form method="POST" action="comments_handler.php">
      <div class="input box">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="input box">
        <label for="comment">Comment:</label>
        <input type="text" id="comment" name="comment">
      </div>
      <input type="submit" value="Submit">
    </form>
    <table id="comments">
      <thead>
        <tr>
          <th>Name</th>
          <th>Comment</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $contents = file_get_contents("posted_comments.txt");
          $comments = explode("\n", trim($contents));
          $comments = array_reverse($comments);
          $i = 0;
          if (count($comments) == 0) {
            echo "no comments";
          } else {
            foreach ($comments as $comment) {
              list($name, $comment) = explode("|", trim($comment));
              echo "<tr>
                      <td>{$name}</td>
                      <td>{$comment}</td>
                      <td><a href='delete_comment.php?id='>X</a></td></tr>";
            }
          }
        ?>

      </tbody>
    </table>
  </body>
</html>

<?php


?>
