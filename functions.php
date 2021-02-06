<?php
  function get_navbar(){

    echo '<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"><img src="imgs/Rabbit_ico.svg" class="rabbit-icon"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="question.php">Rabbit</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>';
  }


  function ricapitola ($arr){
    // fai un ciclo for e ci metti dentro l'if così le controlla tutte e tre
    for ($i = 1; $i <= 3; $i++) {
      // fai un ciclo if che controlla se le variabili sono vuote e ci scrive dentro "nulla"
      if ($arr[$i] == ""){
        $arr[$i] = "nulla";
      }
    }
    echo "<p class='lead'>Hai risposto " . $arr[1] . " alla prima domanda, " . $arr[2] . " alla seconda domanda e " . $arr[3] . " alla terza.</p><br><br>";
  }

  function risp(){
      //$ids[$i] = $postId;
      return "ok";
  }

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

  function stampa_tabella($tabella, $displayed){
    $k = 0;
    echo "<table><tr><th>ID</th><th>Name</th><th>Date</th></tr>";
    for($k = 1; $k <= $displayed; $k++){
      echo "<tr><td>".$tabella[$k]->id."</td><td>".$tabella[$k]->title."</td><td>".$tabella[$k]->date."</td><td>"."<a href=".$tabella[$k]->link.">Link</a>"."</td></tr>";
    }
    echo "</table>";
  }

  function comparator($object1, $object2) {
    return $object1->date > $object2->date;
  }


  function descending($arr, $num){
    for($w = 0; $w < $num; $w++){
      $desc[$w] = $arr[$num - $w];
    }
    return $desc;
  }


 ?>
