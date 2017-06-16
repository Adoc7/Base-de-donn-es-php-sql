<h1>insertion des données</h1>

<?php

include("connect.php");

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["Submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

$title = $_POST['title'];
// $url_image = $_FILES['url_image']['name'];
$image = $_FILES['image']["name"];
$article_content = $_POST['article_content'];
// $date = $_POST['date'];

/////////////////////////////////////////////////////////////////////////



$req = $pdo->prepare("INSERT INTO articles (title, image, article_content)
VALUES (:title, :image, :article_content)");

$req->bindParam('title',$title);
$req->bindParam('image',$image);
$req->bindParam('article_content',$article_content);

  // var_dump($article_content);
$req->execute();
// $req->execute(array(
  //   'title' => $title,
  //   'image' => $image,
  //   'article_content' => $article_content
  //   // 'date'=> (int)$date
  // ));


header('Location: liste_article.php');
