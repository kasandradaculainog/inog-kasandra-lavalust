<?php

class StudentMiddleware
{
    public function handle()
    {
        session_start();

        if (!isset($_SESSION['student_access'])) {

            http_response_code(403);

            echo "
            <!DOCTYPE html>
            <html>
            <head>
                <title>Access Denied</title>
                <style>
                    *{
                        margin:0;
                        padding:0;
                        box-sizing:border-box;
                        font-family:'Segoe UI',sans-serif;
                    }

                    body{
                        background:
                        radial-gradient(circle at top,#00ffff33,#050816 60%),
                        #050816;
                        height:100vh;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                    }

                    .card{
                        width:500px;
                        text-align:center;
                        padding:50px;
                        border:2px solid #00ffff;
                        border-radius:25px;
                        background:rgba(255,255,255,.05);
                        box-shadow:0 0 40px rgba(0,255,255,.4);
                    }

                    .robot{
                        font-size:100px;
                    }

                    h1{
                        color:#ff4444;
                        margin:20px 0;
                    }

                    p{
                        color:white;
                        margin-bottom:25px;
                    }

                    a{
                        display:inline-block;
                        padding:12px 25px;
                        background:#00ffff;
                        color:black;
                        text-decoration:none;
                        border-radius:30px;
                        font-weight:bold;
                    }
                </style>
            </head>
            <body>

                <div class='card'>
                    <div class='robot'>🤖</div>
                    <h1>ACCESS DENIED</h1>
                    <p>You must enter through the Student Home page first.</p>
                    <a href='/student'>Go to Home</a>
                </div>

            </body>
            </html>
            ";

            exit;
        }
    }
}