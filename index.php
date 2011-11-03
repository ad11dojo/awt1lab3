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
	public $hair; // en sträng

	// metoder
	function set_name($in_name)
	{
		$this->name = $in_name;
	}

}

// 2. skapa tre kunder med/egenskaper

$cust1 = new Customer();

//$cust1->name = "Kristian";
$cust1->set_name("Kristian");

echo "<pre>";
print_r( $cust1 );
echo "</pre>";


$cust2 = new Customer();
$cust3 = new Customer();




// 6. skapa 5 kunder via konstruktorn
// 7. skapa getters & setters för egenskaper
// 8.1 skapa objekt & lägg i en array.
// 8.2 loopa igenom array, skriv ut svar på frågor
// 9. skriv om frågorna till metoder i objektet
// 10. skriv regexp för att validera kundegenskaper 
// 10? innan de sätts i formulär eller i konstruktorn?


?>