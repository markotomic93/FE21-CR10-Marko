<?php
require_once 'db_connect.php';


if ($_POST) {    
    $id = $_POST['id'];
    $image = $_POST['img'];
    $title = $_POST['title'];
    $mediatype = $_POST['mediaType'];
    $description = $_POST['shortDescr'];
    $authorLastName = $_POST['authorLastName'];
    $authorFirstName = $_POST['authorFirstName'];
    $publisher = $_POST['publisherName'];
    $publisherAddress = $_POST['publisherAddress'];
    $publishedOn = $_POST['publishDate'];
    $status = $_POST['mediaStatus'];
    $isbn = $_POST['ISBN'];
 
        $sql = "UPDATE products SET title = '$title', img = '$image', mediaType ='$mediatype',shortDescr= '$description',authorLastName = '$authorLastName',authorFirstName = '$authorFirstName',publisherName = '$publisher', 
        publisherAddress = '$publisherAddress', publishDate = '$publishedOn',mediaStatus = '$status', ISBN = '$isbn'
           WHERE id = {$id}";
    if (mysqli_query($connect, $sql) === true) {
        $class = "Success";
        $message = "This  Product was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating : <br>" .mysqli_connect_error();
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
    <header>
        <?php
            include_once '../components/navigation.php';
        ?>
    </header>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response:</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
       
    </body>
</html>