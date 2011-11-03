<?php

// lab3 om klasser

// 1. skapa en kundklass

class Customer
{
	// attribut
	private $name; // en sträng
	public $address; // en sträng
	public $age;	// en int
	public $email; // en sträng
	public $phone; // en sträng
	private $hair; // en sträng

	// metoder
	// getter & setter för attributet name
	function set_name($in_name)
	{
		$this->name = $in_name;
	}
	function get_name()
	{
		return $this->name;
	}

	// konstruktor, anropas automatiskt vid instantiering
	function __construct( 
			$in_name="Alf", 
			$in_hair="Skallig" )
	{
		echo "skapade nytt objekt av klassen Customer<br />";

		$this->set_name( $in_name );
		$this->hair = $in_hair;

	}


} // slut på klassdefinitionen


// 2. skapa tre kunder med/egenskaper

$cust1 = new Customer( "Hans", "Cendré" );

//$cust1->name = "Kristian";
//$cust1->set_name("Kristian");
echo $cust1->get_name();

echo "<pre>";
print_r( $cust1 );
echo "</pre>";


$cust2 = new Customer( "Berit" );


echo "<pre>";
print_r( $cust2 );
echo "</pre>";


$cust3 = new Customer();




// 6. skapa 5 kunder via konstruktorn


// 7. skapa getters & setters för egenskaper
// 8.1 skapa objekt & lägg i en array.
// 8.2 loopa igenom array, skriv ut svar på frågor
// 9. skriv om frågorna till metoder i objektet
// 10. skriv regexp för att validera kundegenskaper 
// 10? innan de sätts i formulär eller i konstruktorn?


?>