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
    <header>
    <?php require_once 'components/navigation.php'?>
    </header>
    <body>

   <div class="container">
          <div class=" d-flex justify-content-center" >
          <img class="card-img-top"  src='<?php echo $image ?>' alt="<?php echo $title ?>">
          </div>
          <h2 >Insert your changes here:</h2>
            <form action="actions/a_update.php"  method="post">
            <table class='table  table-striped '>   
                    <tr>
                        <th>Image:</th>
                        <td><input class='form-control' type="text" name="img" placeholder ="Image URl"  value="<?php echo $image ?>"/></td>
                    </tr>    
                    <tr>
                        <th>Title:</th>
                        <td><input class='form-control' type="text" name= "title" placeholder ="Product Title" value="<?php echo $title ?>"/></td>
                    </tr>
                    <tr>
                        <th>Media type:</th>
                        <td>
                        <select class='form-select'  name= "mediaType" aria-label="Default select example">
                                <option selected><?php echo $mediatype ?></option>
                                    <option value="Book">Book</option>
                                    <option value="CD">CD</option>
                                    <option value="DVD">DVD</option>
                             </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Short Description:</th>
                        <td><input class='form-control' type="text" name="shortDescr" value="<?php echo $description ?>"/></td>
                    </tr>
                    <tr>
                        <th>Author Last Name:</th>
                        <td><input class='form-control' type="text" name="authorLastName" value="<?php echo $authorLastName ?>"/></td>
                    </tr>
                    <tr>
                        <th>Author First Name:</th>
                        <td><input class='form-control' type="text" name="authorFirstName" value="<?php echo $authorFirstName ?>"/></td>
                    </tr>
                    <tr>
                        <th>Publisher:</th>
                        <td><input class='form-control' type="text" name="publisherName" value="<?php echo $publisher ?>"/></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name="publisherAddress" value="<?php echo $publisherAddress ?>"/></td>
                    </tr>
                    <tr>
                        <th>Published on:</th>
                        <td><input class='form-control' type="date" name="publishDate" value="<?php echo $publishedOn ?>" /></td>
                    </tr>
                    <tr>
                        <th>Media Status</th>
                        <td>
                        <select class='form-select'  name="mediaStatus" aria-label="Default select example" >      
                                  <option selected><?php echo $status ?></option>   
                                    <option value="Available">Available</option>
                                    <option value="Reserved">Reserved</option>       
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="ISBN" value="<?php echo $isbn ?>" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "img" value= "<?php echo $data['img'] ?>" />
                        <td><button class="btn btn-primary" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-success" type="button"><i class="fas fa-reply"></i>  Back to Home</button></a></td>
                    </tr>
                </table>
            </form>
            </div>
        <footer>
            <?php require_once 'components/footer.php' ?>
        </footer>
    </body>
</html>