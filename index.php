<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
    <div class="container">
        <?php 
         
         class User {
            // The class properties.
            public $firstName;
           
            // A method that says hello to the user $firstName.
            public function hello()
            {
              echo "hello, " .  $this -> firstName;
          
              return $this;
            }
           
            // A method to register the user.
            public function register()
            {
              echo " >> registered";
              return $this;
            }
           
            // A method to send the welcome email.
            public function mail()
            {
              echo " >> email sent";
            }
          }
           
          $user1 = new User();
          $user1 -> firstName = "Jane";
           
          // Chain the methods hello then register then mail.
          $user1 -> hello()
                 -> register() 
                 -> mail();
        ?>
    </div>
</body>
</html>