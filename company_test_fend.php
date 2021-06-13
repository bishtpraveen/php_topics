<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>ajax</title>
</head>

<body>
    <div class="container">


        <div class="row">


        <h1 style="background-color: yellow;" class="text-center">PHP and Ajax</h1>
            
        </div>
        <div class="row">
            <p class="text-center" style="background-color:blue" >   <input type="button" id="load-button" value="load data">     </p>

        </div>

        <div class="row">

        <table id="table-data" class="table table-hover table-bordered">

<thead>
    <tr class="bg-danger">
        <th>id</th>
        <th>Name</th> 
   </tr>
</thead>
        <tbody>

        <tr >
            <th>1</th>
            <th>Yahoo baba se utube tutorials</th>
        </tr>
        </tbody>
        </table>

        </div>
    </div>

<script type="text/javascript"  >

$(document).ready(function(){

$('#load-button').on("click",function(e){


    $.ajax({

        url:"query_atest.php",
        type:"POST",
        data:,
        success: function(data){


            $("#table-data").html(data);
        }
    })

})

});




</script>






</body>

</html>