<?php
include('auery_mt.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../jquery.js"></script>
    <script src="../js/bootstrap.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>SNo
                </th>
                <th>username</th>
                <th>email</th>
                <th>password</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="myData">
            
            </tbody>
            </table>
            </div>



<div class="col-md-6">


<p class="text-center" id="submitMsg"></p>
<label for="">username</label>
<input type="text" id="username" class="form-control">
<label for="">email</label>
<input type="eamil" id="eamil" class="form-control">
<label for="">password</label>
<input type="password" id="password" class="form-control">
<div class="text-center">
<input type="submit" onClick="submitBtn"  class="btn btn-success" >

</div>

</div>
<div class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            <h2>update details</h2>
<p id="updateMsg"></p>


            </div>

            <div class="modal-body">
            
            <input type="hidden" id="updateId">
            <input type="text" id="editUserName" placeholder="enter username" class="form-control">
            <input type="email" id="editEmail" placeholder="enter email"  class="form-control">


            </div>

<div class="modal-footer">

<button data-dismiss="modal" class="btn btn-dark">Close</button>

<button onClick="updateDetails()" class="btn btn-success">Update Details</button>

</div>


        </div>
    </div>
</div>



        </div>
    </div>


<script>


getData=()=>{

$.ajax({

    url:'query_mt.php',
    type:'get',
    data:{getData:'getdata'},
    success:function(data){


        d=JSON.parse(data)
        let tag_name=''
        for(let i=0;i<d.length;i++){

tag_name+="<tr>";
tag_name+="<td> SN </td>";
tag_name+="<td>"+d[i].username+"</td>";
tag_name+="<td>"+d[i].email +"</td>";
tag_name+="<td>*****************</td>";
tag_name+="<td> <button onClick='editDetails("+d[i].id+")'>Edit</button><button onClick='deleteDetails()'>Delete<button>            </td>"




tag_name+="</tr>";

        }
        $('#myData').html(tag_name)
    }
})




}


gatData()
submitForm=()=>{


let un=$('#username').val()
let em=$('#email').val()
let ps=$('#password').val()

if(un==''||em==''||ps==||){

    $('#submitMsg').html('all feilds are required')
    $('#submitMsg').css('color','red')
    return false;
}

$.ajax({
url:'auery_mt.php',
type:'post',
data:{register:'reg',un:un,email:em,password:ps},
success:function(data){

    if(data=='insertd'){

        $('#submitMsg').html('Register is done')
        $('#submitMsg').css('color','green')
        getData();
    }
    else{

        $('#submitMsg').html(data)
        $('#submitMsg').css('color','red')
    }
}



});

}

editDetails=()=>{

$.ajax({
url:'auery_mt.php',
type:'get',
data:{getId:'getId'},
success:function(data){

obj=JSON.parse(data)
console.log(obj)
$('#editUserName').val(obj.username)
$('#editEmail').val(obj.email)
$('#updateId').val(obj.id)
$('#editDetailsModal').modal('show')

}


})



}

updateDetails=()=>{


    let upUN=$('#editUserName').val()
     let upEM=$('#editEmail').val()
     let upID=$('#updateId').val()

     $.ajax({

         url:'auery_mt.php',
         type:'get',
         data:'{upId:upID,upUName:upUN,upEmail:upEM}',
         success:function(data){

if(data=='1'){
    $('#updateMsg').html(){
        $('#updateMsg').html('Data updated successfully')
                        $('#updateMsg').css('color','green')
                        setTimeout(() => {
                            $('#editDetailsModal').modal('hide')
                        }, 2000);
    }
}

         }
     })
}






</script>
</body>
</html>