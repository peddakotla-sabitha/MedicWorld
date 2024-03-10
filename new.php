<?php
  session_start();
?>
<html>
        <head>
        <style>
             .account_container 
              {
                    background-image: url("https://img.freepik.com/free-photo/medicine-capsules-global-health-with-geometric-pattern-digital-remix_53876-126742.jpg?w=740&t=st=1691812445~exp=1691813045~hmac=357df72756c41a2bc9910bfb26d03efbb123778c5ee20b0bdf8b7fc2c3b504fa");
                    height: 100vh;
                    background-size: cover;
              }

             .content_center
             {
                     position: relative;
                     top:200px;
		     left: 50px;
                    
       
             }
        </style> 
        <script src='https://kit.fontawesome.com/c4254e24a8.js' crossorigin='anonymous'></script>

         <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'                                      integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>

         <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js' integrity="sha384-                          geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bk" crossorigin='anonymous'></script>
          
        </head>
         <body>
             <div class='account_container'>
                  <img src='logo3.png' width='200px' height='100px' align='right'>
                   <center class='content_center'>
                         <h3 class='mb-3'>Welcome to Medic World <br><br><?php echo $_SESSION["name"]; ?></h3>
                         <button class="btn btn-outline-light border border-dark mt-3" style='margin-right:200px;'><a href='medicinepage.php' class="text-dark" style="text-decoration: none;">Go to Home page -></button>
                   </center>
             </div>
        </body>
      </html>
         
