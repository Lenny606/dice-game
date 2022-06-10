<?php

class Dice {

    
    public $rolled_side = null; 

   public function roll()
   {
        $this->rolled_side = rand(1, 6);

   }
}
