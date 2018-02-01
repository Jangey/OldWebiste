<html>
    <title>Contact Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h1 {
            text-shadow: 3px 2px red;
        }
    </style>
    <body class="w3-black">
        <h1> 

            Welcome <?php echo $_GET["Name"]; ?> <br>
            Your email address is: <?php echo $_GET["Email"]; ?> <br>
            Thank you for visiting my website, I will contact you ASAP :)

        </h1>
        <footer class="w3-center w3-black w3-padding-64">
            <a href="index.html" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Back to home page</a>
        </div>
    </footer>
</body>
</html>