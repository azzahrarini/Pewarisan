
<?php

// Parent Class : Clothes
class Clothes {
    public $brand; //Public : diwariskan dan bisa diakses dari luar class
    protected $color; //Protected: bisa diakses parent dan child class
    private $price; // Private: hanya bisa diakses langsung di dalam Clothes

    public function __construct($brand, $color, $price) {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }

    public function tampilkanHarga() {
        return $this->price;
    }
}

// Child Class 1 : Jacket
class Jacket extends Clothes {
    // Mewarisi brand, color, constructor, dan tampilkanHarga()
    // Price tidak bisa diakses secara langsung karena private
    public function tampilkanJacket() {
        echo "Jacket: " . $this->brand . "<br>";
        echo "Warna: " . $this->color . "<br>";
        echo "Harga: " . $this->tampilkanHarga() . "<br>";
    }
}

// Child Class 2 : TShirt
class TShirt extends Clothes {
    // Mewarisi brand, color, constructor, dan tampilkanHarga()
    // Price tidak bisa diakses secara langsung karena private
    public function tampilkanTShirt() {
        echo "T-Shirt: " . $this->brand . "<br>";
        echo "Warna: " . $this->color . "<br>";
        echo "Harga: " . $this->tampilkanHarga() . "<br>";
    }
}

// Child Class 3 : Pants
class Pants extends Clothes {
    // Mewarisi brand, color, constructor, dan tampilkanHarga()
    // Price tidak bisa diakses secara langsung karena private
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


<hr>

<h3>Catatan Penggunaan Pewarisan (Inheritance)</h3>

<ol>
    <li><b>extends Clothes</b> digunakan untuk mewarisi class induk ke class anak.</li>
    <li>Jacket, TShirt, dan Pants merupakan child class dari Clothes.</li>
    <li><b>$this</b> digunakan untuk mengakses properti dan method dalam class.</li>
    <li><b>Public</b> bisa diakses dari mana saja, <b>protected</b> bisa diakses parent dan child, sedangkan <b>private</b> hanya bisa diakses dalam class asalnya.</li>
    <li>Object dibuat dari masing-masing child class untuk menampilkan data pakaian.</li>
</ol>

<b>Kesimpulan:</b> Inheritance memungkinkan child class menggunakan properti dan method dari parent class tanpa harus menulis ulang kode.
