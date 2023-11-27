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
            <span class="material-symbols-outlined">
                
            </span>
            <div class="container-form">
                <form method="post" action="_dashboard.php">
                    <div class="form-title">
                        <span>Sign In</span>
                        <span><a href="#">force your password ?</a></span>
                    </div>
                    <?php
                        // inclusion of the bdd :
                        include 'assets/conn/_conn.php';

                    ?>
                    </br>
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="your username" required autofocus>        

                    <label for="pass">Password :</label>
                    <input type="password" name="pass" id="pass" placeholder="your username" required>        
    
                    <button type="submit" name="connect" class="">Connexion</button>       
                </form>
            </div>  
            
            <div class="create_compte">
                <p>Don't have an account?</p>

                <a href="_signUp.php">Create a free account here</a>
            </div>
            
        </div>
    </main>   

<script src='main.js'></script>
</body>
</html>