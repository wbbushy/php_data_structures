<?php

  class node {
    public $left;
    public $right;
    public $data;

    public function __construct($data){
      $this->data = $data;
      $this->right = null;
      $this->left = null;
  }


  class binary_tree  {
    public $head;

    public function __construct($head) {
      $this->head = null;
    }
  }



?>
