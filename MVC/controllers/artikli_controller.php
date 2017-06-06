<?php
  class ArtiklController {
    public function index() {
      // we store all the posts in a variable
      $artikli = Artikl::all();
      require_once('views/artikli/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $artikli = Artikl::find($_GET['id']);
      require_once('views/artikli/show.php');
    }
	public function deleteartikl() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $artikli = Artikl::deleteartikl($_GET['id']);
      require_once('views/artikli/delete.php');
    }
  }
?>