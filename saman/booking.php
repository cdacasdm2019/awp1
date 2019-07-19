<!DOCTYPE html>
<?php
    include("dbconnect.php");
?>
<html>
    <head>
        <title>Online Movie Booking - BookMyShow</title>
        <script>
function validateForm() {
   var rdate=(document.getElementById("releaseDate").value);
 var bdate=(document.getElementById("bookingDate").value);
                if(rdate>bdate){
                    alert("Booking Date should be greater than Release Date");
                    return false;
                }
    return true;
  }
</script>

    </head>
    <body>
        <div>
            <h1>Online Movie Booking Form</h1>
            <div>
                <form action="process.php" method="post" onsubmit="return validateForm()">
                    
                    <?php
                        if(!empty($_GET['id']))
                        {
                            $id=$_GET['id'];
                               $sql="SELECT * FROM movie WHERE movieid=$id";
                            $res=mysqli_query($connect,$sql) or die(mysqli_error($connect));
                            $product=mysqli_fetch_array($res);
                            $movie = $product['moviename'];
                            $price = $product['movieprice'];
                            $release = $product['movierelease'];
                        }
                    ?>
                    <div >
                        <label>Movie Name</label> 
                        <input type="text"  id="movieName" value="<?php echo $movie ?>"
                         name="movieName" required readonly>
                    </div>

                    <div>
                        <label>Movie Price</label>
                        <input type="number" value="<?php echo $price ?>" 
                        id="moviePrice" name="moviePrice" required readonly>
                    </div>

                    <div>
                        <label>Release Date</label>
                        <input type="date" id="releaseDate" name="releaseDate" value="<?php echo $release ?>" required readonly>
                    </div>

                    <div>
                        <label>Booking Date</label>
                        <input type="date" id="bookingDate" name="bookingDate" required>
                    </div>

                    <div>
                        <input type="submit" id="submit" value="Book Movie">
                    </div>

                </form> 
            </div>
        </div>
    </body>
</html>