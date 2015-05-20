<?php
  class node {

    public $data;
    public $nextNode;

    public function __construct($data) {
      $this->data = $data;
      $this->nextNode = null;
    }
  }

  class linkedList {

    public $head;

    public function __construct() {
      $this->head = null;
    }



  }
?>
