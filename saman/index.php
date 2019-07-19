<?php
    include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Online Movie Booking - BookMyShow</title>
    </head>
    <body>
        <div>
            <h1 >Online Movie Booking Form</h1>
           
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Release Date</td>
                        <td>Option</td>
                    </tr>
                    <br>
                    <?php
                    $movies = "SELECT * FROM movie";
                    $movie = mysqli_query($connect, $movies) or die(mysqli_error($connect));
                    $var = 1;
                    while ($row = mysqli_fetch_array($movie))
                    {   
                                         
                        echo '
                        <tr>
                            <td>'.$var.'</td>
                            <td>'.$row['moviename'].'</td>
                            <td>'.$row['movieprice'].'</td>
                            <td>'.$row['movierelease'].'</td>
                            <td><a href="booking.php?id='.$var.'">Book Now</a></td>   
                        </tr>                             
                        ';             
                        $var = $var + 1;       
                    }
                    ?>                
                </table>
            </div>
        </div>
    </body>
</html>