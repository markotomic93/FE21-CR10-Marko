<?php
require_once 'actions/db_connect.php';
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $image = $data['img'];
        $title = $data['title'];
        $mediatype = $data['mediaType'];
        $description = $data['shortDescr'];
        $authorLastName = $data['authorLastName'];
        $authorFirstName = $data['authorFirstName'];
        $publisher = $data['publisherName'];
        $publisherAddress = $data['publisherAddress'];
        $publishedOn = $data['publishDate'];
        $status = $data['mediaStatus'];
        $isbn = $data['ISBN'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Big Library</title>
        <link rel="stylesheet" href="style/details.css">
        <?php require_once 'components/boot.php'?>   
    </head>
    <body>
        <header>
            <?php include_once 'components/navigation.php';   ?>
        </header>

        <div class="container">
           <div class="card shadow my-4" >
           <img src="<?php echo $image ?>" class="card-img-top mt-4" >
                <div class="card-body mt-3">
                    <h5 class="card-title fw-bolder fs-2"><?php echo $title ?></h5>
                    <p class="card-text fs-4"><?php echo $description ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p class="card-text fst-italic">Author: <?php echo $authorLastName . " " . $authorFirstName ?></p></li>
                    <li class="list-group-item"><p class="card-text">Type: <?php echo $mediatype ?></p></li>
                    <li class="list-group-item">
                        <p class="card-text">Published on <?php echo $publishedOn . " by " . $publisher . ", " . $publisherAddress ?></p>
                    </li>
                    <li class="list-group-item"><p class="card-text">ISBN: <?= $isbn?> </p></li>
                    <li class="list-group-item"><p class="card-text">Available: <?= $status;?></p></li>
                </ul>
                <div class="card-body d-flex justify-content-between">
                    <a href="index.php" ><button class= 'btn btn-outline-secondary' type= "button"><i class="fas fa-reply"></i> Go Back</button></a>
                    <a href="update.php?id=<?php echo $id ?>"><button class='btn btn-outline-success' type='button' title='Edit the Product'><i class='fa fa-edit'></i></button><a>
                    <a href="delete.php?id=<?php echo $id ?>"><button class="btn btn-outline-danger " type="button" title='Edit the Product'><i class='fas fa-trash-alt'></i></button></a>
                </div>
       </div>
       </div>
       <footer>
        <?php include_once 'components/footer.php';?>
    </footer> 
    </body>
</html>

