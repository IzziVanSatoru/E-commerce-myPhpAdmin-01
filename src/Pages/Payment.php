<?php
namespace Pages;

class Payment {
    public function render() {
        return '
        <style>
            /* Set background image */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-image: url("https://files.oaiusercontent.com/file-7co6RtsaoRkfNWX8K1G1UWc4?se=2024-11-09T07%3A10%3A46Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3Dd24045d4-c248-499f-a345-1fd8fccc7681.webp&sig=zNgYcl4xmz/MgZG7L4aPSzY47d8SPjL3ORw9Vt9gE5Y%3D");
                background-size: cover;
                background-position: center;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                overflow: hidden;
            }

            /* Wrapper to center content */
            .content-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                width: 100%;
            }

            /* 3D Payment card styling */
            .payment-card {
                background-color: rgba(255, 255, 255, 0.9);
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                max-width: 400px;
                width: 100%;
                text-align: center;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .payment-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
            }

            .payment-card h1 {
                font-size: 24px;
                color: #333;
                margin-bottom: 20px;
            }

            .pay-button {
                padding: 12px 24px;
                background-color: #00796b;
                color: #fff;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s, transform 0.2s;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .pay-button:hover {
                background-color: #004d40;
                transform: translateY(-3px);
            }
        </style>

        <div class="content-wrapper">
            <div class="payment-card">
                <h1>Complete Your Payment</h1>
                <p>Enter your details and click below to proceed with the payment.</p>
                <button class="pay-button">Proceed to Pay</button>
            </div>
        </div>
        ';
    }
}
