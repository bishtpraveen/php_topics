<?php

$url = file_get_contents('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries.json');
$phpData = json_decode($url,true);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>machine Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
<!--ROW START-->
        <div class="row">

        <!--Select country input-->
            <div class="col-md-4">
 <form action="" method="get">
 <label>Select Your Country</label><br />
<select class="form-control" name="country" onChange="getState(this.value);">
 <option value disabled selected>Select Country</option>
<?php
foreach ($phpData as $country) {
 ?>
<option value="<?php echo $country["id"]; ?>">
<?php echo $country["name"]; ?>
</option>
<?php
}
?>
</select> 
 </form>
</div>

<!--Select state input-->
<div class="col-md-4">
     <form action="" method="get">
 <label>Select Your State</label><br />
<select id="capitalId" class="form-control" name="capital" onChange="getState(this.value);">
<option value disabled selected>Select State or City</option>
<?php
foreach ($phpData as $country) {
 ?>
<option value="<?php echo $country["id"]; ?>">
<?php echo $country["capital"]; ?>
</option>
<?php
}
?>
</select> 
 </form>

 <script>

$('#capitalId').click(function(){


    $('#row1')
})




 </script>
 
</div>

<!--5 days weather-->
<div class="col-md-4">
<form action="">
 <label for="">Wheather Forcast</label>
<!--row no. 1 start-->
                    <div class="row my-5">



                        <div class="col-md-12 mx-auto" style="box-shadow: 0px 0px 50px grey; " >

                            <div class="mx-auto">

                                <img style=" height: 100px; width: 290px; position: absolute;margin-top: 15px;  opacity: 50%;" src="https://geographical.co.uk/media/k2/items/cache/e533c4b8d2d2d3798f3271c35ca6e050_XL.jpg"
                                alt="">
                            </div>
                            



                            <div class="text-center mt-4 ">
                                <h3 ><a href="">
                                <?php
                                
                                echo $country['capital'];
                                ?>
                                </a></h3>
                                <p><a href="">01-02-2021</a></p>
                            </div>


                            <div class="my-5 ml-5 mr-5">

                                <h3> <a href="">17.22*C</a> <i style="float: right;color: red; " class="fas fa-sun"></i></h3>
                                <p><a href="">Clear Sky</a></p>
    
                            </div>
                           
                        </div>


                    </div>
                    <!--row no. 1 ends-->
                    <!--row no. 2 start-->
                    <div class="row my-3">



                        <div class="col-md-12 mx-auto" style="box-shadow: 0px 0px 50px grey; " >

                            <div class="mx-auto">

                                <img style=" height: 100px; width: 290px; position: absolute;margin-top: 15px;  opacity: 50%;" src="https://geographical.co.uk/media/k2/items/cache/e533c4b8d2d2d3798f3271c35ca6e050_XL.jpg"
                                alt="">
                            </div>
                            



                            <div class="text-center mt-4 ">
                                <h3 ><a href=""> <?php
                                
                                echo $country['capital'];
                                ?></a></h3>
                                <p><a href="">01-02-2021</a></p>
                            </div>


                            <div class="my-5 ml-5 mr-5">

                                <h3> <a href="">17.22*C</a> <i style="float: right;color: red; " class="fas fa-sun"></i></h3>
                                <p><a href="">Clear Sky</a></p>
    
                            </div>
                           
                        </div>


                    </div>
                    <!--row no. 2 ends-->
                    <!--row no. 3 start-->
                    <div class="row my-3">



                        <div class="col-md-12 mx-auto" style="box-shadow: 0px 0px 50px grey; " >

                            <div class="mx-auto">

                                <img style=" height: 100px; width: 290px; position: absolute;margin-top: 15px;  opacity: 50%;" src="https://geographical.co.uk/media/k2/items/cache/e533c4b8d2d2d3798f3271c35ca6e050_XL.jpg"
                                alt="">
                            </div>
                            



                            <div class="text-center mt-4 ">
                                <h3 ><a href=""> <?php
                                
                                echo $country['capital'];
                                ?></a></h3>
                                <p><a href="">01-02-2021</a></p>
                            </div>


                            <div class="my-5 ml-5 mr-5">

                                <h3> <a href="">17.22*C</a> <i style="float: right;color: red; " class="fas fa-sun"></i></h3>
                                <p><a href="">Clear Sky</a></p>
    
                            </div>
                           
                        </div>


                    </div>
                    <!--row no. 3 ends-->
                    <!--row no. 4 start-->
                    <div class="row my-3">



                        <div class="col-md-12 mx-auto" style="box-shadow: 0px 0px 50px grey; " >

                            <div class="mx-auto">

                                <img style=" height: 100px; width: 290px; position: absolute;margin-top: 15px;  opacity: 50%;" src="https://geographical.co.uk/media/k2/items/cache/e533c4b8d2d2d3798f3271c35ca6e050_XL.jpg"
                                alt="">
                            </div>
                            



                            <div class="text-center mt-4 ">
                                <h3 ><a href=""> <?php
                                
                                echo $country['capital'];
                                ?></a></h3>
                                <p><a href="">01-02-2021</a></p>
                            </div>


                            <div class="my-5 ml-5 mr-5">

                                <h3> <a href="">17.22*C</a> <i style="float: right;color: red; " class="fas fa-sun"></i></h3>
                                <p><a href="">Clear Sky</a></p>
    
                            </div>
                           
                        </div>


                    </div>
                    <!--row no. 4 ends-->
                    <!--row no. 5 start-->
                    <div class="row my-3">



                        <div class="col-md-12 mx-auto" style="box-shadow: 0px 0px 50px grey; " >

                            <div class="mx-auto">

                                <img style=" height: 100px; width: 290px; position: absolute;margin-top: 15px;  opacity: 50%;" src="https://geographical.co.uk/media/k2/items/cache/e533c4b8d2d2d3798f3271c35ca6e050_XL.jpg"
                                alt="">
                            </div>
                            



                            <div class="text-center mt-4 ">
                                <h3 ><a href="">Mendoza</a></h3>
                                <p><a href="">01-02-2021</a></p>
                            </div>


                            <div class="my-5 ml-5 mr-5">

                                <h3> <a href="">17.22*C</a> <i style="float: right;color: red; " class="fas fa-sun"></i></h3>
                                <p><a href="">Clear Sky</a></p>
    
                            </div>
                           
                        </div>


                    </div>
                    <!--row no. 5 ends-->
                </form>

            </div>
        </div>
    </div>


</body>

</html>