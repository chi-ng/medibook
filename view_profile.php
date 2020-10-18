<!DOCTYPE html>
<html>
    <header>
        <title> View profile </title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <!-- navigation menu template-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    </header>


    <body>
        <div class="container">
            <div class="box-screen">
                <!-- logo -->
                <div class="logo">
                    <a href="homepage.html"> <img src="logo.png"> </a>
                </div>


                <!--navigation menu -->
                <div class="w3-bar w3-light-grey">
                    <a href="homepage.html" class="w3-bar-item w3-button"> Home </a>
                    <a href="logout.php" class="w3-bar-item w3-button" style="float: right"> Log out </a>
                </div>
            </div>

<br>
            <div class="body">
                <h1> View Profile </h1>
                <form action="" method="GET">
                    <table>
                        <tr> 
                            <td> First name: </td>
                            <td> Tri </td> 
                            <!-- <td> <?php echo $firstname ?> </td> --> 
                        </tr>

                        <tr> 
                            <td> Last name: </td>
                            <td> Ng </td> 
                            <!-- <td> <?php echo $lastname ?> </td> --> 
                        </tr>

                        <tr> 
                            <td> Address: </td>
                            <td> Railway Side </td> 
                            <!-- <td> <?php echo $address ?> </td> --> 
                        </tr>

                        <tr> 
                            <td> Post code: </td>
                            <td> SW13 0PN </td> 
                            <!-- <td> <?php echo $postcode ?> </td> --> 
                        </tr>

                        <tr> 
                            <td> City: </td>
                            <td> London </td> 
                            <!-- <td> <?php echo $city ?> </td> --> 
                        </tr>

                        <tr> 
                            <td> Country: </td>
                            <td> <?php echo "United Kingdom" ?> </td>
                        </tr>

                        <tr> 
                            <td> Email: </td>
                            <td> tri@gmail.com </td> 
                            <!-- <td> <?php echo $email ?> </td> --> 
                        </tr>

                    </table>
                </form>
                <br><br>
                <button type="button" style="background-color: #CAE8F0" href="edit_profile."> Edit profile </button> 
              
                
                
            </div>
        </div>
    </body>
    <footer>
    </footer>
</html>
