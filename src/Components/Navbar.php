<?php
namespace Components;

class Navbar {
    public function render() {
        return '
            <style>
                /* Internal CSS untuk Navbar */
                .navbar {
                    width: 100%;
                    padding: 10px 20px;
                    background-color: rgba(255, 255, 255, 0.8);
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    border-radius: 10px;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s;
                    font-family: "Noto Sans JP", sans-serif;
                }

                .navbar:hover {
                    transform: translateY(-5px);
                }

                .navbar-logo a {
                    color: #1B3B5F;
                    font-size: 1.5em;
                    font-weight: bold;
                    text-decoration: none;
                }

                .navbar-links {
                    list-style: none;
                    display: flex;
                    gap: 20px;
                }

                .navbar-links li {
                    display: inline;
                }

                .navbar-links a {
                    color: #1B3B5F;
                    text-decoration: none;
                    padding: 8px 12px;
                    border-radius: 5px;
                    transition: background-color 0.2s;
                }

                .navbar-links a:hover {
                    background-color: #B3D1FF;
                    color: #ffffff;
                }
            </style>

            <nav class="navbar">
                <div class="navbar-logo">
                    <a href="/ecommerce-project/public/index.php?page=home">E-Commerce</a>
                </div>
                <ul class="navbar-links">
                    <li><a href="/ecommerce-project/public/index.php?page=home">Home</a></li>
                    <li><a href="/ecommerce-project/public/index.php?page=productcart">Product Cart</a></li>
                    <li><a href="/ecommerce-project/public/index.php?page=payment">Payment</a></li>
                </ul>
            </nav>
        ';
    }
}
