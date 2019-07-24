<?php
    
    class Car {

  
	public $comp;
	public $color = "beige";
	public $hasSunRoof = true;

    public function hello()
    
    {
    
       return "headlights" ;
}

}
   $bmw = new Car();
   $audi = new Car();
   $dugati = new Car();

   $bmw -> color = 'black';
   $audi -> color = 'blue';
   $dugati -> color = 'white';
   $bmw -> comp = "BMW";
   $audi -> comp = "Audi";
   $dugati -> comp = 'Dugati';


   echo $bmw -> color;
   echo "<br />";
   echo $audi -> color;
   echo "<br />";
   echo $dugati -> color;
   echo "<br />";
   echo $bmw -> comp;
   echo "<br />";
   echo $audi -> comp;
   echo "<br />";
   echo $dugati -> comp;
   echo "<br />";
   echo $bmw -> hello(); 
   echo "<br />";
   echo $audi -> hello();
   echo "<br />"; 
   echo $dugati -> hello(); 
?>