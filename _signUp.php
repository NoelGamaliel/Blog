<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='./assets/style/style.css'>

</head>
<body>
    <main>
        <div class="container">
            <div class="container-form">
                <form method="post" action="_signUp.php">
                    <div class="form-title">
                        <span>Sign Up</span>
                        <span><a href="_signIn.php">Sign In</a></span>
                    </div>
                    <?php
                        // inclusion of the bdd :
                        include 'assets/conn/_conn.php';

                        if (isset($_POST['save'])) {
                            $name_users = $_POST['name_users'];
                            $email_users = $_POST["email_users"];
                            $pass_users = password_hash($_POST['pass_users'], PASSWORD_ARGON2ID);

                            if (!filter_var($_POST["email_users"], FILTER_VALIDATE_EMAIL)) {
                                die("Inserer un bon adresse email");           # code...
                            }

                            //insersion the data for tables :
                            $req = "INSERT INTO `_users` (`name_users`, `email_users`, `pass_users`) VALUES (?, ?, ?)";
                            $stmt = $conn->prepare($req);

                            if ($stmt->execute(array($name_users, $email_users, $pass_users))) {
                                echo "Successul ! your compte as created";
                            } else {
                                echo 'Your champs is not completed';
                            }
                            
                        } 

                    ?>
                    </br>
                    <label for="user">Username :</label>
                    <input type="text" name="name_users" id="user" placeholder="your username" required autofocus>        

                    <label for="email">Email :</label>
                    <input type="email" name="email_users" id="email" placeholder="your username" required>        

                    <label for="pass">Password :</label>
                    <input type="password" name="pass_users" id="pass" placeholder="your username" required>        
    
                    <button type="submit" name="save" class="">Save</button>       
                </form>
            </div> 
            <div class="create_compte">
                <p>Do you have an account?</p>

                <a href="_signIn.php">Connect you here please</a>
            </div>          
        </div>
    </main>

    <script src='main.js'></script>
</body>
</html>




