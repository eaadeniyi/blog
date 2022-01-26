<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAA Blog</title>
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link rel="stylesheet" href="./css/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="./css/line-awesome.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<!-- Header Section -->
<div id="parent">
        <header>
            <nav class="grid-container">
                <div class="grid-50 suffix-20">
                    <!-- LOGO -->
                    <div class="logo">
                        <h1>E.A.A's BLOG</h1>
                    </div>
                </div>
                <div class="grid-30">
                    <!-- Date and Time -->
                    <div class="time">
                    <p><strong><?php
                        // Return date/time info of a timestamp; then format the output
                        $mydate=getdate(date("U"));
                        echo "$mydate[month] $mydate[mday], $mydate[year].  $mydate[hours]:$mydate[minutes]" ;
                    ?></strong></p> 
                    </div>
                   
                </div>
            </nav>
        </header>
        <!-- End of Header Section -->

        <!-- Start of Main Display -->
        <section class="main-display">
            <nav class="grid-container nav-links">
                    <ul>
                        <div class="grid-20"><li><a href="#">Home</a></li></div>
                        <div class="grid-20"><li><a href="#">Faith</a></li></div>
                        <div class="grid-20"><li><a href="#">Lifestyle</a></li></div>
                        <div class="grid-20"><li><a href="#">Travel</a></li></div>
                        <div class="grid-20"><li><a href="#">Food</a></li></div>
                    </ul>
            </nav>
        </section>
</div>
    

