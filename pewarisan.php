
<?php

// Parent Class
class Clothes {
    public $brand;
    protected $color;
    private $price;

    public function __construct($brand, $color, $price) {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }

    public function tampilkanHarga() {
        return $this->price;
    }
}

// Child Class 1
class Jacket extends Clothes {
    public function tampilkanJacket() {
        echo "Jacket: " . $this->brand . "<br>";
        echo "Warna: " . $this->color . "<br>";
        echo "Harga: " . $this->tampilkanHarga() . "<br>";
    }
}

// Child Class 2
class TShirt extends Clothes {
    public function tampilkanTShirt() {
        echo "T-Shirt: " . $this->brand . "<br>";
        echo "Warna: " . $this->color . "<br>";
        echo "Harga: " . $this->tampilkanHarga() . "<br>";
    }
}

// Child Class 3
class Pants extends Clothes {
    public function tampilkanPants() {
        echo "Pants: " . $this->brand . "<br>";
        echo "Warna: " . $this->color . "<br>";
        echo "Harga: " . $this->tampilkanHarga() . "<br>";
    }
}

// Object
$jacket = new Jacket("Uniqlo", "Black", 250000);
$tshirt = new TShirt("Erigo", "White", 100000);
$pants = new Pants("Levis", "Blue", 300000);

// Output
$jacket->tampilkanJacket();
echo "<br>";

$tshirt->tampilkanTShirt();
echo "<br>";

$pants->tampilkanPants();

?>
