<?php
session_start();
include 'check_session.php';
include 'database.php';
$obj = new query();
$sql="select * from user";
if(isset($_SESSION['role'])  && $_SESSION['role']=='user'){
    $sql .= ' where status = 1 ';
}
$result = $obj->selectData($sql);
//print_r($result);
?>
<!doctype html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>User Listing - PHP Object dOriented Programming CRUD</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <style>
		.container{margin-top:100px;}
	  </style>
   </head>
   <body>
      <div class="container">
         <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="manage-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>
         </div>
         <hr>
         <div>
            <table class="table table-striped table-bordered">
               <thead>
                  <tr class="bg-primary text-white">
                     <th>Sr#</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th class="text-center">Added On</th>
                     <th class="text-center">status</th>
                     <?php if(isset($_SESSION['role'])  && $_SESSION['role']=='admin'){?>
                     <th class="text-center">Action</th>
                     <?php } ?>
                  </tr>
               </thead>
               <tbody>
                   <?php if($result!=0) {
                       $sr=1;
                       foreach($result as $value){
                        ?>
                  <tr>
                     <td><?=$sr;?></td>
                     <td><?=$value['name']?></td>
                     <td><?=$value['email']?></td>
                     <td align="center"><?=$value['created_time']?></td>
                     <td align="center"><?php echo $value['status']==0 ? 'Pending ' : 'Approved' ?></td>
                     <?php if(isset($_SESSION['role'])  && $_SESSION['role']=='admin'){?>
                     <td align="center">
                         <?php if($value['status']==0 ){ ?>
                     <a href="#" onclick="approved(<?=$value['id']?>)"><i class="fa fa-fw fa-check"></i> Approve</a> 
                     <?php } ?>
                        <a href="edit_user.php?id=<?=$value['id']?>" class="-ptextrimary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
                        <a href="#" onclick="deleteid(<?=$value['id']?>)" class="text-danger"><i class="fa fa-fw fa-trash"></i> Delete</a>
                     </td>
                     <?php } ?>
                  </tr>
                  <?php $sr++; } } else { ?>
                  <tr>
                     <td colspan="6" align="center">No Records Found!</td>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
         <!--/.col-sm-12-->
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
   </body>
</html>
<script>
    function approved(id){
        if(confirm("Are you sure Approve ?")){


$.ajax({
    type:'POST',
    url:'user_approve.php',
    data:{user_id:id},
    success:function(response){
        if(response==1){
            alert('Approved Successfully');
            location.reload();
        }
    }
});
}

    }
    </script>

    
<script>
    function deleteid(id){
        if(confirm("Are you sure Delete ?")){


$.ajax({
    type:'POST',
    url:'user_delete.php',
    data:{user_id:id},
    success:function(response){
        if(response==1){
            alert('Delete Successfully');
            location.reload();
        }
    }
});
}

    }
    </script>