
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<meta charset="UTF-8">
<meta name="description" content="It is control panel that will let you to control the robotic arm">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
include 'startConnection.php';
$sql2="SELECT * FROM  Engines WHERE UserID='1'";
if (mysqli_query($conn, $sql2)) {
} else {
    die("Error creating account:" . mysqli_error($conn));
}
$result= mysqli_query($conn,$sql2);
$row = mysqli_fetch_array($result);


if($row['Status1'] == 1){
    echo '
    <body class="bg-dark ">
    
    
    <div class="row  bg-dark "  >
    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bg-dark ">
        <table class="table table-dark">
        <form action="main.php" method="POST" id="usrform" >;
      <thead>
      <tr>
      <p  class="text-danger" >Engines Final reuslt:</span></p>
         </th>
         
       </tr>
        <tr>
        <th  class="text-danger"> Engine1 :</th>
        <th  class="text-danger"> Engine2 :</th>
        <th  class="text-danger"> Engine3 :</th>
        <th  class="text-danger"> Engine4 :</th>
        <th  class="text-danger"> Engine5 :</th>
        <th  class="text-danger"> Engine6 :</th>
        <th  class="text-danger"> Status :</th>
          
        </tr>
        </tr>
        <tr>';
        echo'
        <th  class="text-primary">' . $row['Engine1'] .  '</th>
        <th  class="text-primary">' . $row['Engine2'] .  '  </th>
        <th  class="text-primary">' . $row['Engine3'] .  '  </th>
        <th  class="text-primary">' . $row['Engine4'] .  ' </th>
        <th  class="text-primary">' . $row['Engine5'] .  '   </th>
        <th  class="text-primary">' . $row['Engine6'] .  ' </th>
        <th  class="text-primary">  On </th>
          
        </tr>
      </thead>
      <tbody>
      </table>
    
    </div>
    
    
    
    </body>';
    
}else{
    echo '
    <body class="bg-dark ">
    
    
    <div class="row  bg-dark "  >
    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bg-dark ">
        <table class="table table-dark">
        <form action="main.php" method="POST" id="usrform" >;
      <thead>
      <tr>
      <p  class="text-danger" >Engines Final reuslt:</span></p>
         </th>
         
       </tr>
        <tr>
        <th  class="text-danger"> Engine1 :</th>
        <th  class="text-danger"> Engine2 :</th>
        <th  class="text-danger"> Engine3 :</th>
        <th  class="text-danger"> Engine4 :</th>
        <th  class="text-danger"> Engine5 :</th>
        <th  class="text-danger"> Engine6 :</th>
        <th  class="text-danger"> Status :</th>
          
        </tr>
        </tr>
        <tr>';
        echo'
        <th  class="text-primary">' . $row['Engine1'] .  '</th>
        <th  class="text-primary">' . $row['Engine2'] .  '  </th>
        <th  class="text-primary">' . $row['Engine3'] .  '  </th>
        <th  class="text-primary">' . $row['Engine4'] .  ' </th>
        <th  class="text-primary">' . $row['Engine5'] .  '   </th>
        <th  class="text-primary">' . $row['Engine6'] .  ' </th>
        <th  class="text-primary">  OFF </th>
          
        </tr>
      </thead>
      <tbody>
      </table>
    
    </div>
    
    
    
    </body>';
    
}

?>