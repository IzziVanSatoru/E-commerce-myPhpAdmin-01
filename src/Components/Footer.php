<?php
namespace Components;

class Footer {
    public function render() {
        return '
            <style>
                /* Internal CSS untuk Footer */
                .footer {
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    padding: 5px 10px;
                    background-color: rgba(255, 255, 255, 0.8);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                    box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.1);
                    font-family: "Noto Sans JP", sans-serif;
                    font-size: 0.9em;
                    color: #1B3B5F;
                    z-index: 1000;
                }

                .footer p {
                    margin: 0;
                }

                .footer a {
                    color: #B3D1FF;
                    text-decoration: none;
                    font-weight: bold;
                    margin-left: 5px;
                }

                .footer a:hover {
                    color: #FFC1E3;
                }

                /* Responsive styling */
                @media (max-width: 768px) {
                    .footer {
                        font-size: 0.8em;
                        padding: 8px;
                    }
                }

                @media (max-width: 480px) {
                    .footer {
                        font-size: 0.7em;
                        padding: 6px;
                    }
                }
            </style>

            <footer class="footer">
                <p>&copy; ' . date("Y") . ' E-Commerce. All Rights Reserved.
                    <a href="about.php">About Us</a>
                </p>
            </footer>
        ';
    }
}
