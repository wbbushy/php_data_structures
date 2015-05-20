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

    public function isEmpty() {
      if($head == null) {
        return true;
      } else {
        return false;
      }
    }

    public function addNode($node) {
      if($this->isEmpty()) {
        $this->head = $node;
      } else {
        $currentNode = $this->head;
        while($currentNode != null) {
          $currentNode = $currentNode->nextNode;
        }
        $currentNode->nextNode = $node;
      }
    }

  }

  $a = new linkedList();
  echo $a->isEmpty();
  $node1 = new node("bob");
  $a->addNode($node1);
  echo $a->head->data;
?>
