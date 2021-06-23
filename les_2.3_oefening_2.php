//Klok
<?php
class Klok {

    
    public $uur = 0 ;
    public $dag = 0 ;
    public $uren ;
    public $dagen ;
    

    public function __construct($uur,$dag,$uren,$dagen) {

      $this->uur = $uur;
      $this->dag = $dag;
      $this->uren = $uren;
      $this->dagen = $dagen;
    }

    public function add() {

    $uren += $this->uur;

    while ($uren >= 24 && $uren%24==0) {

        return $dagen += $this->uren;
    }

    

    }

    public function show() {
    echo "Nu de tijd is {$this->dagen} dagen en {$this->uren} uren.";
}
}

$tijd=new Klok (5,2,"","");
 $tijd->show();
?>