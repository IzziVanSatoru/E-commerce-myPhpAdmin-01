<?php
namespace Pages;

use Components\Navbar;

class ProductCart {
    public function render() {
        // Include Navbar
        $navbar = new Navbar();
        
        return '
        <style>
            /* General Styling for Body */
            body {
                font-family: "Noto Sans JP", sans-serif;
                background-image: url("https://files.oaiusercontent.com/file-7co6RtsaoRkfNWX8K1G1UWc4?se=2024-11-09T07%3A10%3A46Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3Dd24045d4-c248-499f-a345-1fd8fccc7681.webp&sig=zNgYcl4xmz/MgZG7L4aPSzY47d8SPjL3ORw9Vt9gE5Y%3D");
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                margin: 0;
                padding-top: 80px; /* Add padding to avoid navbar overlap */
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            /* Fixed Navbar Styling */
            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                padding: 20px;
                background-color: rgba(255, 255, 255, 0.9);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 0 0 8px 8px;
                z-index: 1000;
                text-align: center;
            }

            /* Main Container */
            .main-container {
                width: 100%;
                max-width: 900px;
                background-color: rgba(255, 255, 255, 0.85); /* Light overlay for readability */
                border-radius: 12px;
                padding: 40px;
                text-align: center;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            /* Title Styling */
            .title {
                font-size: 2em;
                font-weight: bold;
                color: #2c3e50;
                margin-bottom: 20px;
            }

            /* Product Card Container */
            .product-card-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
                width: 100%;
                padding: 20px 0;
            }

            /* Individual Product Card */
            .product-card {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                text-align: center;
                transition: transform 0.3s;
            }

            .product-card:hover {
                transform: scale(1.05);
            }

            .product-card h3 {
                font-size: 1.2em;
                color: #333;
                margin: 10px 0;
            }

            .product-card p {
                font-size: 1em;
                color: #777;
                margin: 8px 0;
            }

            .select-checkbox {
                margin-top: 10px;
                transform: scale(1.2);
            }

            /* Save Button Styling */
            .submit-button {
                margin-top: 20px;
                padding: 12px 24px;
                font-size: 16px;
                background-color: #2c3e50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .submit-button:hover {
                background-color: #1a252f;
            }
        </style>

        ' . $navbar->render() . '

        <div class="main-container">
            <h1 class="title">Select Your Products</h1>
            <form action="/ecommerce-project/src/backend/sql/save_products.php" method="POST">
                <div class="product-card-container">
                    ' . $this->generateProductCards() . '
                </div>
                <button type="submit" class="submit-button">Save Selected Products</button>
            </form>
        </div>
        ';
    }

    private function generateProductCards() {
        $products = [
            ["id" => 1, "name" => "Product 1", "price" => "$20"],
            ["id" => 2, "name" => "Product 2", "price" => "$25"],
            ["id" => 3, "name" => "Product 3", "price" => "$30"],
            ["id" => 4, "name" => "Product 4", "price" => "$35"],
        ];

        $html = '';
        foreach ($products as $product) {
            $html .= '
            <div class="product-card">
                <h3>' . $product["name"] . '</h3>
                <p>Price: ' . $product["price"] . '</p>
                <input type="checkbox" name="products[]" value="' . $product["id"] . '" class="select-checkbox"> Select
            </div>';
        }

        return $html;
    }
}
