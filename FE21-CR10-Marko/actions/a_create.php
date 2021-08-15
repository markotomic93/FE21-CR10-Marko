<?php
require_once 'db_connect.php';

if ($_POST) {   
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
    $sql = 
    " INSERT INTO products (img, title, mediaType,shortDescr,authorLastName,authorFirstName,publisherName,publisherAddress,publishDate,mediaStatus,ISBN)
    VALUES ('$image', '$title', '$mediatype', '$description', '$authorLastName','$authorFirstName','$publisher','$publisherAddress','$publishedOn','$status','$isbn')";
    

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'>
            <tr>
                <td>$image</td>
                <td>t$title</td>
                <td>$mediatype</td>
                <td>$description</td>
                <td>$authorLastName </td>
                <td>$authorFirstName </td>
                <td>$publisher</td>
                <td>$publisherAddress</td>
                <td>$publishedOn</td>
                <td>$status</td>
                <td>$isbn</td>
            </tr>
        </table>
        <hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
        
    </body>
</html>