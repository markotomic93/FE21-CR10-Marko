<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Big Library</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
    <header>
        <?php include_once 'components/navigation.php';   ?>
    </header>
        <div class="container">
        <div class="card shadow my-4">
        <fieldset>
            <legend class='h2'>Add Product</legend>
            <form action="actions/a_create.php" method= "post" >
                <table class='table'>
                    <tr>
                        <th>Image:</th>
                        <td><input class='form-control' type="text" name="img"  placeholder="Image" /></td>
                    </tr>    
                    <tr>
                        <th>Title:</th>
                        <td><input class='form-control' type="text" name= "title" placeholder="Title" /></td>
                    </tr>
                    <tr>
                         <th>Media type:</th>
                        <td>
                        <select class='form-select'  name= "mediaType" aria-label="Default select example">
                                <option selected>Choose the type:</option>
                                    <option value="Book">Book</option>
                                    <option value="CD">CD</option>
                                    <option value="DVD">DVD</option>
                             </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Short Description:</th>
                        <td><input class='form-control' type="text" name="shortDescr" placeholder="Add a short description" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name:</th>
                        <td><input class='form-control' type="text" name="authorLastName" placeholder="A.lastname" /></td>
                    </tr>
                    <tr>
                        <th>Author First Name:</th>
                        <td><input class='form-control' type="text" name="authorFirstName" placeholder="A.firstname" /></td>
                    </tr>
                    <tr>
                        <th>Publisher:</th>
                        <td><input class='form-control' type="text" name="publisherName" placeholder="P.name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name="publisherAddress" placeholder="Address" /></td>
                    </tr>
                    <tr>
                        <th>Published on:</th>
                        <td><input class='form-control' type="date" name="publishDate" placeholder="date" /></td>
                    </tr>
                    <tr>
                        <th>Media Status</th>
                        <td>
                        <select class='form-select'  name="mediaStatus" aria-label="Default select example" >      
                                  <option selected>Choose the Status:</option>   
                                    <option value="Available">Available</option>
                                    <option value="Reserved">Reserved</option>       
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="ISBN" placeholder="ISBN" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        </div>
        </div>
        <footer>
        <?php include_once 'components/footer.php';?>
    </footer> 
    </body>
</html>