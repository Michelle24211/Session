<?php
  include_once 'includes/index.php';
?>
<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   <!-- Will look weird when comments are added, styling might need to be change
<style>
        
#QA {
  display: inline-block;
  color: #87CEEB;
  position: absolute;
  top: 10%;
  left: 43%;
  border:1px solid black;
  background-color: #0000a0;
}

body {
  background-image: url("images/question.jpg");
}
#main{
        border:1px solid black;
        background-color: #0000a0;
        border-radius: 1em;
        padding: 1em;
        position: absolute;
        top: 45%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%); color:#87CEEB;}
}
    </style> -->
    <title>Q&A</title>
  </head>

  <body>

    <header>
      <div id="Q" style="text-align:center">
      <div id = "QA"><h2>Q&A</h2></div>
      </div>

      <div id="main">
        <form action = "includes/insert.php" method = "POST">
          Email:<br>
          <input type="text" name="mail" id="mail"><br>
          Name:<br>
          <input type="text" name="name" id = "name"><br>
          Subject:<br>
          <input type="text" name="subject" id = "subject"><br>
          Comment:<br>
          <textarea name="comment" rows="8" cols="80" id = "comment"></textarea>" <br><br>
         <button type="submit" id="submit"  name = "submit" >Post</button>
       </form>
    </div>
    <p id = "com"></p>
  <header>
    <p>
      <?php
          $sql = "SELECT * FROM hack;";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
              echo "<p>" . $row['mail'] . "<br>" . $row['name'] . "<br>" . $row['subject'] . "<br>" . $row['comment'] . "</p>";
            }
          }
      ?>
    </p>

 
  </body>

</html>

