<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="rabbit.css" />
  </head>
  <body>

    <div class="rabbit-page"> <!--a pink page just how i like it-->

      <div class="rabbit-container"> <!--max-width = 700px-->
        <div class="rabbit-page-header">
          <h1 class="rabbit-title">Ecco il tuo articolo</h1>
        </div>


    <?php

      include 'functions.php';
      get_navbar();

      //connessione al database
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "typoes_x";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } /*else{
        echo ("<h2>connessione riuscita!</h2>");
      } poi togli l'else*/


      $sql = "SELECT id, post_title, post_date, post_type, post_status, guid FROM wp_posts";
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Date</th></tr>";
        // output data of each row

        $displayed = 5; //numero di articoli mostrati
        $i = 0;


        while(($row = $result->fetch_assoc()) and ($i < $displayed)) {
          if((strcmp($row["post_type"], "post") == 0) and (strcmp($row["post_status"], "publish") == 0))
          {

            //questa è la parte in cui riempie l'array, ma prima dobbiamo controllare che siano in ordine cronologico
            $a1[$i] = new Articolo();
            $a1[$i]->set_articolo($row);


            //$postId = $row["id"];
            /*$postTitile = $row["post_title"];
            $postDate = $row["post_date"];
            $postLink = $row["guid"];*/

            echo "<tr><td>".$a1[$i]->id."</td><td>".$a1[$i]->title."</td><td>".$a1[$i]->date."</td><td>"."<a href=".$a1[$i]->link.">Link</a>"."</td></tr>";
            //echo "<tr><td>".$postId."</td><td>".$postTitile."</td><td>".$postDate."</td><td>"."<a href=".$postLink.">Link</a>"."</td></tr>";

            $i = $i + 1;
          } //if is post and publish
        } //while
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close();






      //include 'articoli.php';
      include_once fill_id();



      /*function fill_id($postId, $i){
          $ids[$i] = $postId;
          return "ok";
      }*/

      class Articolo{
        public $id;
        public $title;
        public $link;
        public $date; //string
        public $row;

        public function set_articolo($row) {
          $this->id = $row["id"];
          $this->title = $row["post_title"];
          $this->link = $row["guid"];
          $this->date = $row["post_date"];
          //echo $this->title;
        }
      }


      ?>

        </div>
      </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
