/* Dieren
<?php
class Dier {
    public $sort ="vogel";
    public $poten = 2;
    public $vleugels = 4;
    public $ogen = 2;
    public $snavel =0;
    public $actie ="zwemmen";


    public function __construct ($sort,$poten,$vleugels,$ogen,$snavel,$actie) 
    {   $this->sort=$sort;
        $this->poten=$poten;
        $this->vleugels=$vleugels;
        $this->ogen=$ogen;
        $this->snavel=$snavel;
        $this->actie=$actie;
        
    }

     public function show() {
     echo "Hier is een {$this->sort} met {$this->poten} poten en {$this->vleugels} veugels en {$this->ogen} ogen en {$this->snavel} snavel en kan {$this->actie}.";

     }
}

 $kip = new Dier("vogel",4, 2, 3,1,"rennen");
 $kip->show();
 echo"<br>";
 $olifant =new Dier("zoogdier",4,"geen",2,"geen","rennen");
 $olifant->show();
 echo"<br>";
 $mug =new Dier("insect",8,4,8,1,"vliegn");
 $mug ->show();
 echo"<br>";
 $karper= new Dier("vis","geen","geen",2,"geen","zwemmen");
 $karper->show();
 echo"<br>";
 $kat=new Dier("zoogdier",4,"geen",2,"geen","klimmen");
 $kat->show();

?>