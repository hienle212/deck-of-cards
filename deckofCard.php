<?php
class cards{
	 
	 public function __construct($value,$suits){
		$this->value = $value;
		$this->suits = $suits;
 	}
 }
  class deck{
  	public $suits;
  	public $value;
	public $total_card;
	public $cards = [];
	public function __construct() {
	$this->suits = ["Hearts", "Spades", "Diamonds", "Clubs" ];
    $this->value = ["Ace", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King" ];
        for( $i =0 ; $i <= 13;$i++){
            for( $j =0 ; $j < 4;$j++){
               //	$cards = new deck ($this->suits[$j],$this->value[$i]);
            	 var_dump ($this->suits[$j]);
            	  var_dump ($this->value[$i]);
            	// echo "$suits".$this->$suits[$j].","."$value".$this->$value[$i];
            }

        }
    }
}
$deck= new deck();
var_dump ($deck);

// 	}
		
		

 // class player{
 // 	public $hand;
 // 	public $name;
 // 	public function __construct($name,$hand){
 // 		$this->name = $name;
 // 		$this->hand = $hand;
 // 	}
 // }


?>
