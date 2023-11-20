<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            margin: 0 auto; /* Center website */
            max-width: 800px; /* Max width */
            padding: 20px;
        }

        .heading {
            font-size: 25px;
            margin-right: 25px;
        }

        .fa {
            font-size: 25px;
        }

        .checked {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top:10px;
        }

        .middle {
            margin-top:10px;
            float: left;
            width: 70%;
        }

        /* Place text to the right */
        .right {
            text-align: right;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
        .bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
        .bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
        .bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
        .bar-1 {width: 15%; height: 18px; background-color: #f44336;}

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {
            .side, .middle {
                width: 100%;
            }
            .right {
                display: none;
            }
        }
    </style>
</head>
<body>

<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
    <div class="side">
        <div>5 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-5"></div>
        </div>
    </div>
    <div class="side right">
        <div>150</div>
    </div>
    <div class="side">
        <div>4 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-4"></div>
        </div>
    </div>
    <div class="side right">
        <div>63</div>
    </div>
    <div class="side">
        <div>3 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-3"></div>
        </div>
    </div>
    <div class="side right">
        <div>15</div>
    </div>
    <div class="side">
        <div>2 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-2"></div>
        </div>
    </div>
    <div class="side right">
        <div>6</div>
    </div>
    <div class="side">
        <div>1 star</div>
    </div>
    <div class="middle">
        <div class="bar-container">
            <div class="bar-1"></div>
        </div>
    </div>
    <div class="side right">
        <div>20</div>
    </div>
</div>

</body>
</html>
