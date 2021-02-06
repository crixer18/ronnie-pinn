<?php

//crea un oggetto
class Articolo {
// Properties
public $id;
public $title;
public $link;
public $date; //string
//public $category;
//public $tags;
public $row;

//manca il concstructor?
function articolo ()
   {
      $this->id = 0;
      $this->title = "";
      $this->link = "";
      $this->date = "";
   }



public function set_articolo($row) {
  $this->id = $row["id"];
  $this->title = $row["post_title"];
  $this->link = $row["guid"];
  $this->date = $row["post_date"];
  //echo $this->title;
}




// Methods SET
public function set_id($id) {
  $this->id = $id;
}
public function set_title($title) {
  $this->title = $title;
}
/*public function set_link($link){
  $this->link = $link;
}
public function set_date($date){
  $this->date = $date;
}*/

// Methods GET
public function get_id() {
  return $this->id;
}
public function get_title() {
  return $this->title;
}
public function get_link() {
  return $this->link;
}
public function get_date() {
  return $this->date;
}

}



 ?>
