<html>
  <head>
    <title>Information Gathered</title>
  </head>

  <body>
    <?php
      /*
      H: 24 hrs, h: 12 hrs format
      i: min , s: seconds
      a/A for lowercase and uppercase am/pm
      l, F, y: full text fot the day, month and year
      j: day of the month in number
      S: suffix for the day

      echo "<p>Data processed </> </b>";
      date_default_timezone_set('America/Chicago');
      echo date(' h:i:s A l F jS Y e '); */
      
        $usersName = $_POST['username']; //passing information
        $streetAddress = $_POST['streetaddress'];
        $cityAddress = $_POST['cityaddress'];


      echo $usersName . "</br>";
      echo $streetAddress . "</br>";
      echo $cityAddress . "</br>";

    ?>
  </body>
</html>
