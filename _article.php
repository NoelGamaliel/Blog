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
            <div class="container-form-article">
                <form method="post" action="_article.php">
                    <div class="form-title">
                        <span>Ajout a new article</span>
                        <span><? $message; ?></span>
                    </div>
                    <?php
                        // inclusion of the bdd :
                        include 'assets/conn/_conn.php';

                        if (isset($_POST['ajout'])) {
                            $message = "";
                            $title_art = $_POST["title_art"];
                            $content_art = $_POST["content_art"];
                            $categorie_art = $_POST["categorie_art"];

                            // $fichier = $_FILES["monImage"]["name"];
                            // $ImgSize = $_FILES["monImage"]["size"];
                            // $ImgType = $_FILES["monImage"]["type"];
                            // $ImgTemp = $_FILES["monImage"]["tmp_name"];

                            //condution for send data from tables ;
                            $req = "INSERT INTO _articles (title_art, content_art, categorie_art) VALUES (?, ?, ?)";
                            $stmt = $conn->prepare($req);

                            if ($stmt->execute(array($title_art, $content_art, $categorie_art))) {
                                echo 'Succefull... Your article is saved !';
                            } else {
                                echo 'Your article is not saved !';
                            }

                            
                            

                        } 

                    ?>
                    <br>
                    <label for="title">Title :</label>
                    <input type="text" name="title_art" id="user" placeholder="your title article" required autofocus>        

                    <label for="content">Content :</label>
                    <textarea name="content_art" id="content" cols="10" rows="5" required></textarea>
                    
                    <!-- <label for="picture">Picture :</label>
                    <input type="file" name="monImage" id="picture" placeholder="select your picture" required> -->

                    <label for="cat">Categorie :</label>
                    <select name="categorie_art" id="cat">
                        <option value="choise">selected article category</option>
                        <option value="1">Techno</option>
                        <option value="2">Politic</option>
                        <option value="3">Culturel</option>
                        <option value="4">Event</option>
                    </select>       
    
                    <button type="submit" name="ajout" class="">Ajout</button>       
                </form>
            </div>           
        </div>
    </main>

    <script src='main.js'></script>
</body>
</html>




