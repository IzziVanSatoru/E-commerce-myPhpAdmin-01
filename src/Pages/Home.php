<?php
namespace Pages;

class Home {
    public function render() {
        return '
        <style>
            /* Background and Body Styling */
            body {
                font-family: "Noto Sans JP", sans-serif;
                background-image: url("https://files.oaiusercontent.com/file-7co6RtsaoRkfNWX8K1G1UWc4?se=2024-11-09T07%3A10%3A46Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3Dd24045d4-c248-499f-a345-1fd8fccc7681.webp&sig=zNgYcl4xmz/MgZG7L4aPSzY47d8SPjL3ORw9Vt9gE5Y%3D");
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                margin: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                color: #2c3e50;
                min-height: 100vh;
            }

            /* Main Container */
            .main-container {
                max-width: 1000px;
                width: 90%;
                padding: 20px;
                text-align: center;
                background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                margin-top: 40px;
                flex-grow: 1; /* Pushes footer to bottom */
            }

            /* Title Styling */
            .title {
                font-size: 2.5em;
                font-weight: bold;
                color: #2c3e50;
                margin: 0;
            }

            /* Subtitle Styling */
            .subtitle {
                font-size: 1.2em;
                color: #7f8c8d;
                margin: 10px 0 30px;
            }

            /* Button Styling */
            .explore-button {
                margin-top: 20px;
                padding: 10px 20px;
                font-size: 16px;
                background-color: #2c3e50;
                color: #ffffff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s;
                text-decoration: none; /* Removes underline from link */
                display: inline-block;
            }

            .explore-button:hover {
                background-color: #1a252f;
            }

            /* Footer Styling */
            .footer {
                width: 100%;
                padding: 10px 0;
                font-size: 12px;
                color: #fff;
                background-color: #2c3e50;
                text-align: center;
            }

            /* Responsive footer */
            @media (max-width: 600px) {
                .footer {
                    font-size: 10px;
                    padding: 8px 0;
                }
            }
        </style>

        <div class="main-container">
            <h1 class="title">ようこそ (Welcome)</h1>
            <p class="subtitle">Discover the simplicity and elegance of Japanese-inspired designs.</p>
            <a href="/ecommerce-project/public/index.php?page=productcart" class="explore-button">Explore Products</a>
        </div>

        <div class="footer">
            &copy; ' . date("Y") . ' E-Commerce Project. All rights reserved.
        </div>
        ';
    }
}
