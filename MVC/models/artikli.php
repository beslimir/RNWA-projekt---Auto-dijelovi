<?php
  class Artikl  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $ID_ARTIKL;
    public $ARTIKL_NAZIV;


    public function __construct($ID_ARTIKL, $ARTIKL_NAZIV) {
      $this->ID_ARTIKL      = $ID_ARTIKL;
      $this->ARTIKL_NAZIV  = $ARTIKL_NAZIV;

    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT ID_ARTIKL, ARTIKL_NAZIV FROM ARTIKL');


      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $artikl) {
        $list[] = new Artikl($artikl['ID_ARTIKL'], $artikl['ARTIKL_NAZIV']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT ID_ARTIKL, ARTIKL_NAZIV FROM ARTIKL WHERE ID_ARTIKL = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $artikl = $req->fetch();

      return new Artikl($artikl['ID_ARTIKL'], $artikl['ARTIKL_NAZIV']);
    }
	
	public static function deleteartikl($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
	  $sql="DELETE FROM ARTIKL WHERE ID_ARTIKL ='$id'";
	  //echo $sql;
	  
      //$req = $db->prepare($sql);
      // the query was prepared, now we replace :id with our actual $id value
      //if ($req->execute(array('id' => $id))){
		  //$req=$r->execute($sql);
	if ($db->query($sql) == TRUE){
	//if (1==2){
		  $rez="USPJESNO brisanje";
	  }
		  else {
			 $rez="NESPJESNO brisanje";;
		  }
		  return $rez;
	  
}
  }
?>