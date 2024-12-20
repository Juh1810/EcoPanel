<?php
// Define a class to represent a product
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

// Create an array of product objects
$products = [
    new Product("Monocrystalline 330W", "$335"),
    new Product("Polycrystalline 330W", "$363"),
    new Product("Monocrystalline 400W", "$550"),
    new Product("Polycrystalline 400W", "$380"),
    new Product("Solar Panel Holder", "$30"),
    new Product("Solar Charge 30000mAh", "$65"),
    new Product("Solar Charging Surveillance Camera", "$95"),
    new Product("Solar Powered Light Tout", "$40"),
];

// Check if a search term was provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['searchTerm'])) {
    $searchTerm = strtolower(trim($_POST['searchTerm'])); // Convert to lowercase for case-insensitive search
    $filteredProducts = array_filter($products, function ($product) use ($searchTerm) {
        return strpos(strtolower($product->name), $searchTerm) !== false || 
               strpos(strtolower($product->price), $searchTerm) !== false;
    });
} else {
    // If no search term, display all products
    $filteredProducts = $products;
}

// Display products in table rows
if (!empty($filteredProducts)) {
    foreach ($filteredProducts as $product) {
        echo "<tr>
                <td style='text-align: center;'>{$product->name}</td>
                <td style='text-align: center;'>{$product->price}</td>
              </tr>";
    }
} else {
    echo "<tr>
            <td colspan='2' style='text-align: center;'>No matching products found.</td>
          </tr>";
}
?>
