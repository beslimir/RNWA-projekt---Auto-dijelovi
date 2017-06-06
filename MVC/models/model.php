<?php
  class Model {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $ID_MODEL_VOZILA;
    public $MODEL_VOZILA_NAZIV;
	public $MODEL_VOZILA_ID_MARKA_VOZILA;

    public function __construct($ID_MODEL_VOZILA, $MODEL_VOZILA_NAZIV, $MODEL_VOZILA_ID_MARKA_VOZILA) {
      $this->ID_MODEL_VOZILA = $ID_MODEL_VOZILA;
      $this->MODEL_VOZILA_NAZIV  = $MODEL_VOZILA_NAZIV;
      $this->MODEL_VOZILA_ID_MARKA_VOZILA  = $MODEL_VOZILA_ID_MARKA_VOZILA;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT ID_MODEL_VOZILA, MODEL_VOZILA_NAZIV, MODEL_VOZILA_ID_MARKA_VOZILA FROM `MODEL VOZILA`');
	  
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Model($post['ID_MODEL_VOZILA'], $post['MODEL_VOZILA_NAZIV'], $post['MODEL_VOZILA_ID_MARKA_VOZILA']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT ID_MODEL_VOZILA, MODEL_VOZILA_NAZIV, MODEL_VOZILA_ID_MARKA_VOZILA FROM `MODEL VOZILA` WHERE ID_MODEL_VOZILA = :id');
      //$req = $db->prepare('SELECT * FROM artikl
		//	JOIN `model vozila` ON ID_model_vozila = artikl_ID_model_vozila
		//	WHERE ID_MODEL_VOZILA = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Model($post['ID_MODEL_VOZILA'], $post['MODEL_VOZILA_NAZIV'], $post['MODEL_VOZILA_ID_MARKA_VOZILA']);
      //return new Model($post['artikl_naziv'], $post['artikl_opis'], $post['artikl_cijena'], $post['artikl_valuta'], 
			//			$post['artikl_stanje'], $post['artikl_kolicina']);
    }
  }
?>