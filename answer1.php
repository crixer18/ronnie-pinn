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

    <div class="rabbit-page" style="height: 100vh;"> <!--a pink page just how i like it-->

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
        // output data of each row

        $displayed = 5; //numero di articoli mostrati
        $i = 0;
        $risposte = array(
          1 => $_GET['q1'],
          2 => $_GET['q2'],
          3 => $_GET['q3'],
          );


        while($row = $result->fetch_assoc()){
          if((strcmp($row["post_type"], "post") == 0) and (strcmp($row["post_status"], "publish") == 0))
          {

            $a1[$i] = new Articolo();
            $a1[$i]->set_articolo($row);

            $i = $i + 1;
          }//if is post and publish
        }
        $post_number = sizeof($a1);

        ricapitola ($risposte);

        //stampa_tabella($a1, $displayed);
        usort($a1, 'comparator'); //ordina l'array di oggetti secondo la data e poi li gira in ordine discendente
        $a1 = descending($a1, $post_number);

        stampa_tabella($a1, $displayed);




        //echo $risposte[1];

        //esternalizza la funzione nel foglio functions.php, passagli l'array $risposte



      } else {
        echo "0 results";
      }
      $conn->close();
        /*while(($row = $result->fetch_assoc()) and ($i < $displayed)) {
          if((strcmp($row["post_type"], "post") == 0) and (strcmp($row["post_status"], "publish") == 0))
          {

            //questa è la parte in cui riempie l'array, ma prima dobbiamo controllare che siano in ordine cronologico
            $a1[$i] = new Articolo();
            $a1[$i]->set_articolo($row);


            //$postId = $row["id"];
            /*$postTitile = $row["post_title"];
            $postDate = $row["post_date"];
            $postLink = $row["guid"];*/

            //echo "<tr><td>".$a1[$i]->id."</td><td>".$a1[$i]->title."</td><td>".$a1[$i]->date."</td><td>"."<a href=".$a1[$i]->link.">Link</a>"."</td></tr>";
            //echo "<tr><td>".$postId."</td><td>".$postTitile."</td><td>".$postDate."</td><td>"."<a href=".$postLink.">Link</a>"."</td></tr>";
            //$i = $i + 1;
          //} //
        //} //while

        /*

        while(($row = $result->fetch_assoc()) and ($i < $displayed)) {

          echo "<tr><td>".$a1[$i]->id."</td><td>".$a1[$i]->title."</td><td>".$a1[$i]->date."</td><td>"."<a href=".$a1[$i]->link.">Link</a>"."</td></tr>";

        }
*/





      //include 'articoli.php';
      include_once risp();
      include_once stampa_tabella();
      include_once Articolo();
      include_once comparator();
      include_once descending();
      //include_once ricapitola();




      ?>

        </div>
      </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
