<?php
class tutorial {

public $id, $name, $cost,$teacher = "";




public function setId($id) {
         $this->id = $id;
    }

public function getId() {
		echo "The Id from set is :";
       echo $this->id;
    }
    public function setName($name) {
         $this->name = $name;
    }

public function getName() {
		echo "The Name from set is :";
       echo $this->name;
    }



}


