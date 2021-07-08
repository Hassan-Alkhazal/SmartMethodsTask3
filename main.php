

<?php
include 'startConnection.php';
$sql3="SELECT * FROM  Engines WHERE UserID='1'";
if (mysqli_query($conn, $sql3)) {
} else {
    die("Error:" . mysqli_error($conn));
}
$result= mysqli_query($conn,$sql3);
$rowcount=mysqli_num_rows($result);
if($rowcount == 0){
  $sql5 = "INSERT INTO  Engines (UserID, Engine1, Engine2, Engine3,Engine4,Engine5,Engine6,Status1) VALUES 
  ('1','0', '0', '0', '0','0','0',0);";
  if (mysqli_query($conn, $sql5))
	echo ("");
else {
	die("Error insering values:" . mysqli_error($conn));
}

}
if(isset($_POST['Forward'])){
  $status=  "Forward";
  $sql5 = "UPDATE  basemovement SET 
  Forward1 = '1',
  Left1 = '0',
  Stop1 = '0',
  Right1 = '0',
  Backward1 = '0'
  Where UserID='1'";
  if (mysqli_query($conn, $sql5)) {
  } else {
      die("Error creating account:" . mysqli_error($conn));
  }
}
  if(isset($_POST['Left'])){
    $status=  "Left";
    $sql5 = "UPDATE  basemovement SET 
    Forward1 = '0',
    Left1 = '1',
    Stop1 = '0',
    Right1 = '0',
    Backward1 = '0'
    Where UserID='1'";
    if (mysqli_query($conn, $sql5)) {
    } else {
        die("Error creating account:" . mysqli_error($conn));
    }
  }

    if(isset($_POST['Stop'])){
      $status=  "Stop";
      $sql5 = "UPDATE  basemovement SET 
      Forward1 = '0',
      Left1 = '0',
      Stop1 = '1',
      Right1 = '0',
      Backward1 = '0'
      Where UserID='1'";
      if (mysqli_query($conn, $sql5)) {
      } else {
          die("Error creating account:" . mysqli_error($conn));
      }
    }
      if(isset($_POST['Right'])){
        $status=  "Right";
        $sql5 = "UPDATE  basemovement SET 
        Forward1 = '0',
        Left1 = '0',
        Stop1 = '0',
        Right1 = '1',
        Backward1 = '0'
        Where UserID='1'";
        if (mysqli_query($conn, $sql5)) {
        } else {
            die("Error creating account:" . mysqli_error($conn));
        }
      }
        if(isset($_POST['Backward'])){
          $status=  "Backward";
          $sql5 = "UPDATE  basemovement SET 
          Forward1 = '0',
          Left1 = '0',
          Stop1 = '0',
          Right1 = '0',
          Backward1 = '1'
          Where UserID='1'";
          if (mysqli_query($conn, $sql5)) {
          } else {
              die("Error creating account:" . mysqli_error($conn));
          }
        
}
if(isset($_POST['submit1'])){
  $Engine1V = mysqli_real_escape_string($conn,$_POST['Engine1V']);
  $Engine2V = mysqli_real_escape_string($conn,$_POST['Engine2V']);
  $Engine3V = mysqli_real_escape_string($conn,$_POST['Engine3V']);
  $Engine4V = mysqli_real_escape_string($conn,$_POST['Engine4V']);
  $Engine5V = mysqli_real_escape_string($conn,$_POST['Engine5V']);
  $Engine6V = mysqli_real_escape_string($conn,$_POST['Engine6V']);
  $Engine6V = mysqli_real_escape_string($conn,$_POST['Engine6V']);
  $EngineOnOFF = mysqli_real_escape_string($conn,$_POST['EngineOnOFF']);
$On1="ON";

  if ($EngineOnOFF == $On1) {
    $sql = "UPDATE  engines SET 
    Engine1 = '$Engine1V',
    Engine2 = '$Engine2V',
    Engine3 = '$Engine3V',
    Engine4 = '$Engine4V',
    Engine5 = '$Engine5V',
    Engine6 = '$Engine6V',
    Status1 = 1
    Where UserID='1'";
    if (mysqli_query($conn, $sql)) {
    } else {
        die("Error creating account:" . mysqli_error($conn));
    }

  } else{
    $sql = "UPDATE  engines SET 
Engine1 = '$Engine1V',
Engine2 = '$Engine2V',
Engine3 = '$Engine3V',
Engine4 = '$Engine4V',
Engine5 = '$Engine5V',
Engine6 = '$Engine6V',
Status1 = 0
Where UserID='1'";
if (mysqli_query($conn, $sql)) {
} else {
    die("Error creating account:" . mysqli_error($conn));
}
  }
}
?>


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
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "cd6c9df7-7336-4423-843c-cf5dabd8c6a6", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "01a035f9-840a-459f-bee0-ad9225df6883", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</head>



<?php

$sql2="SELECT * FROM  Engines WHERE UserID='1'";
if (mysqli_query($conn, $sql2)) {
} else {
    die("Error:" . mysqli_error($conn));
}
$result1= mysqli_query($conn,$sql2);
$row = mysqli_fetch_array($result1);
if(empty($status)){
  $status=  "Start a command";
}

if ($row['Status1'] == 1){
  
  echo '
  <body class="bg-dark ">
  
  
  <div class="row  bg-dark "  >
  
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bg-dark ">
  <form action="main.php" method="POST" id="usrform" >;
  <table class="table table-dark">
  <tr>

<td >
<p  class="text-danger" >Base control:</span></p>
</td>

     </tr>
<tr>

<td class="text-center">
<input type="submit" class="btn btn-danger btn22" min="0" max="180" value=" Forward" " id="Forward1" name="Forward">
</td>

     </tr>
     <tr>
<td class="text-center">
<input type="submit" class="btn btn-danger" min="0" max="180" value=" Left" " id="Left" name="Left">
<input type="submit" class="btn btn-primary" min="0" max="180" value=" Stop" " id="right" name="Stop">
<input type="submit" class="btn btn-danger" min="0" max="180" value="Right" " id="Right" name="Right">
</td> 
     </tr>
     <tr>
    
     
     <td class="text-center">
     <input type="submit" class="btn btn-danger" min="0" max="180" value=" Backward" " id="Backward" name="Backward">
     </th>
  
          </tr>
          <tr>
    
     
          <td class="text-center">
          <p class="text-danger" >Status:<span > ' . $status.'</span></p>
          </th>
       
               </tr>
  </table>
  </form>
  </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bg-dark ">
      <table class="table table-dark">
      <form action="main.php" method="POST" id="usrform" >;
    <thead>
    <tr>
    <p  class="text-danger" >Engines Status: On</span></p>
       </th>
       
     </tr>
      <tr>
       
        <th scope="col"><label for=""> Engine 1:</label>
      <div class="slidecontainer">';
  
    echo '<input type="range" min="0" max="180" value="' . $row['Engine1'] . '" class="slider" id="Engine1" name="Engine1V">
    <p>Value: <span id="Engine1V"></span></p>
      </div>
      <script>
  var slider1 = document.getElementById("Engine1");
  var output1 = document.getElementById("Engine1V");
  output1.innerHTML = slider1.value; // Display the default slider value
  
  // Update the current slider value (each time you drag the slider handle)
  slider1.oninput = function() {
    output1.innerHTML = this.value;
  } 
  </script> </th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
    
        <th scope="row"> <label for=""> Engine 2:</label>
      <div class="slidecontainer">
    <input type="range" min="0" max="180" value="' . $row['Engine2'] . '" class="slider" id="Engine2" name="Engine2V">
    <p>Value: <span id="Engine2V"></span></p>
      </div>
      <script>
  var slider2 = document.getElementById("Engine2");
  var output2 = document.getElementById("Engine2V");
  output2.innerHTML = slider2.value; // Display the default slider value
  
  // Update the current slider value (each time you drag the slider handle)
  slider2.oninput = function() {
    output2.innerHTML = this.value;
  } 
  </script> </th>
      
        
      </tr>
      <tr>
        <th scope="row"> <label for=""> Engine3:</label>
      <div class="slidecontainer">
    <input type="range" min="0" max="180" value="' . $row['Engine3'] .  '"class="slider" id="Engine3" name="Engine3V">
    <p>Value: <span id="Engine3V"></span></p>
      </div>
      <script>
  var slider3 = document.getElementById("Engine3");
  var output3 = document.getElementById("Engine3V");
  output3.innerHTML = slider3.value; // Display the default slider value
  
  // Update the current slider value (each time you drag the slider handle)
  slider3.oninput = function() {
    output3.innerHTML = this.value;
  } 
  </script> </th>
     
        
      </tr>
      <tr>
        <th scope="row"> <label for=""> Engine 4:</label>
      <div class="slidecontainer">
    <input type="range" min="0" max="180" value="' . $row['Engine4']. '"class="slider" id="Engine4" name="Engine4V">
    <p>Value: <span id="Engine4V"></span></p>
      </div>
      <script>
  var slider4 = document.getElementById("Engine4");
  var output4 = document.getElementById("Engine4V");
  output4.innerHTML = slider4.value; // Display the default slider value
  
  // Update the current slider value (each time you drag the slider handle)
  slider4.oninput = function() {
    output4.innerHTML = this.value;
  } 
  </script> </th>
       
      
      </tr>
  
      <tr>
        <th scope="row"><label for=""> Engine 5:</label>
      <div class="slidecontainer">
    <input type="range" min="0" max="180" value="'.$row['Engine5']. '" class="slider" id="Engine5" name="Engine5V">
    <p>Value: <span id="Engine5V"></span></p>
      </div>
      <script>
  var slider5 = document.getElementById("Engine5");
  var output5 = document.getElementById("Engine5V");
  output5.innerHTML = slider5.value; // Display the default slider value 
  
  // Update the current slider value (each time you drag the slider handle)
  slider5.oninput = function() {
    output5.innerHTML = this.value;
  } 
  </script> </th>
       
      
      </tr>
      <tr>
        <th scope="row"> <label for=""> Engine 6:</label>
      <div class="slidecontainer">
    <input type="range" min="0" max="180" value="' .$row['Engine6']. '" class="slider" id="Engine6" name="Engine6V">
    <p>Value: <span id="Engine6V"></span></p>
      </div>
      <script>
  var slider6 = document.getElementById("Engine6");
  var output6 = document.getElementById("Engine6V");
  output6.innerHTML = slider6.value; // Display the default slider value
  
  // Update the current slider value (each time you drag the slider handle)
  slider6.oninput = function() {
    output6.innerHTML = this.value;
  } 
  </script> </th>
  
  
       
      
      </tr>
      <tr>
        <th scope="row"> 
        <div class="form-check">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" value="ON" name="EngineOnOFF" checked >ON
    </label>
  </div>
  <div class="form-check disabled">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" value="OFF" name="EngineOnOFF" >OFF
    </label>
  
  </div>

  </div>
     
  
     </th>
  
  
       
      
      </tr>
    </tbody>
  </table>
  
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  bg-dark ">
      <input  class="btn btn-danger" type="submit" value="Save" name="submit1">
      <input  class="btn btn-danger" type="button" onClick="myFunction();"  value="Show Final Result"   name="submit2">
  </div>
  
    </div>

    <script>
    function myFunction() {
      window.location.href="EnginesFinalResult.php";
    }
   </script>
   </form>
  
  
    </body>';
  
}else{
  echo '
<body class="bg-dark ">


<div class="row  bg-dark "  >
 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bg-dark ">
<form action="main.php" method="POST" id="usrform" >;
<table class="table table-dark">
<tr>

<td >
<p  class="text-danger" >Base control:</span></p>
</td>

   </tr>
<tr>

<td class="text-center">
<input type="submit" class="btn btn-danger btn22" min="0" max="180" value=" Forward" " id="Forward1" name="Forward">
</td>

   </tr>
   <tr>
<td class="text-center">
<input type="submit" class="btn btn-danger" min="0" max="180" value=" Left" " id="Left" name="Left">
<input type="submit" class="btn btn-primary" min="0" max="180" value=" Stop" " id="right" name="Stop">
<input type="submit" class="btn btn-danger" min="0" max="180" value="Right" " id="Right" name="Right">
</td> 
   </tr>
   <tr>
  
   
   <td class="text-center">
   <input type="submit" class="btn btn-danger" min="0" max="180" value=" Backward" " id="Backward" name="Backward">
   </th>

        </tr>
        <tr>
  
   
        <td class="text-center">
        <p class="text-danger" >Status:<span > ' . $status.'</span></p>
        </th>
     
             </tr>
</table>
</form>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bg-dark ">
    <table class="table table-dark">
    <form action="main.php" method="POST" id="usrform" >;
  <thead>
  <tr>
  <p  class="text-danger" >Engines Status: OFF </span></p>
     </th>
     
   </tr>
    <tr>
     
      <th scope="col"><label for=""> Engine 1:</label>
    <div class="slidecontainer">';

  echo '<input type="range" min="0" max="180" value="' . $row['Engine1'] . '" class="slider" id="Engine1" name="Engine1V">
  <p>Value: <span id="Engine1V"></span></p>
    </div>
    <script>
var slider1 = document.getElementById("Engine1");
var output1 = document.getElementById("Engine1V");
output1.innerHTML = slider1.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider1.oninput = function() {
  output1.innerHTML = this.value;
} 
</script> </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
  
      <th scope="row"> <label for=""> Engine 2:</label>
    <div class="slidecontainer">
  <input type="range" min="0" max="180" value="' . $row['Engine2'] . '" class="slider" id="Engine2" name="Engine2V">
  <p>Value: <span id="Engine2V"></span></p>
    </div>
    <script>
var slider2 = document.getElementById("Engine2");
var output2 = document.getElementById("Engine2V");
output2.innerHTML = slider2.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider2.oninput = function() {
  output2.innerHTML = this.value;
} 
</script> </th>
    
      
    </tr>
    <tr>
      <th scope="row"> <label for=""> Engine3:</label>
    <div class="slidecontainer">
  <input type="range" min="0" max="180" value="' . $row['Engine3'] .  '"class="slider" id="Engine3" name="Engine3V">
  <p>Value: <span id="Engine3V"></span></p>
    </div>
    <script>
var slider3 = document.getElementById("Engine3");
var output3 = document.getElementById("Engine3V");
output3.innerHTML = slider3.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider3.oninput = function() {
  output3.innerHTML = this.value;
} 
</script> </th>
   
      
    </tr>
    <tr>
      <th scope="row"> <label for=""> Engine 4:</label>
    <div class="slidecontainer">
  <input type="range" min="0" max="180" value="' . $row['Engine4']. '"class="slider" id="Engine4" name="Engine4V">
  <p>Value: <span id="Engine4V"></span></p>
    </div>
    <script>
var slider4 = document.getElementById("Engine4");
var output4 = document.getElementById("Engine4V");
output4.innerHTML = slider4.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider4.oninput = function() {
  output4.innerHTML = this.value;
} 
</script> </th>
     
    
    </tr>

    <tr>
      <th scope="row"><label for=""> Engine 5:</label>
    <div class="slidecontainer">
  <input type="range" min="0" max="180" value="'.$row['Engine5']. '" class="slider" id="Engine5" name="Engine5V">
  <p>Value: <span id="Engine5V"></span></p>
    </div>
    <script>
var slider5 = document.getElementById("Engine5");
var output5 = document.getElementById("Engine5V");
output5.innerHTML = slider5.value; // Display the default slider value 

// Update the current slider value (each time you drag the slider handle)
slider5.oninput = function() {
  output5.innerHTML = this.value;
} 
</script> </th>
     
    
    </tr>
    <tr>
      <th scope="row"> <label for=""> Engine 6:</label>
    <div class="slidecontainer">
  <input type="range" min="0" max="180" value="' .$row['Engine6']. '" class="slider" id="Engine6" name="Engine6V">
  <p>Value: <span id="Engine6V"></span></p>
    </div>
    <script>
var slider6 = document.getElementById("Engine6");
var output6 = document.getElementById("Engine6V");
output6.innerHTML = slider6.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider6.oninput = function() {
  output6.innerHTML = this.value;
} 
</script> </th>


     
    
    </tr>
    <tr>
      <th scope="row"> 
      <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="ON" name="EngineOnOFF">ON
  </label>
</div>
<div class="form-check disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="OFF" name="EngineOnOFF" checked>OFF
  </label>

</div>
</div>
   

   </th>


     
    
    </tr>
  </tbody>
</table>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  bg-dark ">

</div>

  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  bg-dark ">
  <input  class="btn btn-danger" type="submit" value="Save" name="submit1">
  <input  class="btn btn-danger" type="button" onClick="myFunction();"  value="Show Final Result"   name="submit2">
</div>
</form>
</div>
</form>;
<script>
function myFunction() {
  window.location.href="EnginesFinalResult.php";
}
</script>


  </body>';
}



?>

</html>