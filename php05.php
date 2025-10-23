  <!DOCTYPE html>
  <html>
    <body>
      <?php
        echo date("H");
        $t=date("H");
        if ($t<"20") {
           echo "Have a good day!";
        }
      ?>
    </body>
  </html>