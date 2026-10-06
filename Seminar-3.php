<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMP 3540 Assignment 3</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0;
            padding:20px;
            background-color:#f4f4f4;
        }

        h2{
            margin-top:40px;
        }

        /* Question 1 - Navigation Bar */

        nav{
            display:flex;
            justify-content:space-between;
            align-items:center;
            background-color:#222;
            padding:15px 25px;
            border-radius:10px;
        }

        .logo img{
            width:120px;
            height:auto;
            border-radius:8px;
        }

        .nav-links{
            display:flex;
            gap:20px;
            list-style:none;
            margin:0;
            padding:0;
        }

        .nav-links li a{
            color:white;
            text-decoration:none;
            font-weight:bold;
        }

        .nav-links li a:hover{
            color:#ffd700;
        }

        /* Question 2 - Product Card */

        .card{
            position:relative;
            width:400px;
            background-color:white;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 4px 10px rgba(0,0,0,0.2);
            margin-top:20px;
        }

        .card img{
            width:100%;
            height:300px;
            object-fit:cover;
            display:block;
        }

        .badge{
            position:absolute;
            top:10px;
            right:10px;
            background-color:red;
            color:white;
            padding:8px 15px;
            border-radius:20px;
            font-weight:bold;
        }

        .content{
            padding:15px;
        }

        .content h3{
            margin:0 0 10px 0;
        }

        .price{
            color:green;
            font-size:20px;
            font-weight:bold;
        }
    </style>
</head>
<body>

    <h2>Question 1: Modern Navigation Bar</h2>

    <nav>

        <div class="logo">
            <img src="logo_for_download_free.jpg" alt="Company Logo">
        </div>

        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

    </nav>

    <h2>Question 2: E-Commerce Product Card</h2>

    <div class="card">

        <div class="badge">SALE</div>

        <img src="arttower-buildings-7653900.jpg" alt="Girl in a jacket" width="500" height="600">

        <div class="content">
            <h3>Winter City Artwork</h3>
            <p class="price">$49.99</p>
        </div>

    </div>

</body>
</html>