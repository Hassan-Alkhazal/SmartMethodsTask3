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

</head>




<body class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bg-dark ">


<div class="row  bg-dark "  >

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bg-dark ">
    <table class="table table-dark">
  <thead>
    <tr>
     
      <th scope="col"><label for=""> Engine 1:</label>
    <div class="slidecontainer">
  <input type="range" min="0" max="180" value="0" class="slider" id="Engine1">
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
  <input type="range" min="0" max="180" value="0" class="slider" id="Engine2">
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
  <input type="range" min="0" max="180" value="0" class="slider" id="Engine3">
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
  <input type="range" min="0" max="180" value="0" class="slider" id="Engine4">
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
  <input type="range" min="0" max="180" value="0" class="slider" id="Engine5">
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
  <input type="range" min="0" max="180" value="0" class="slider" id="Engine6">
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
      <button type="button" class="btn btn-danger">On/OFF</button>
      <button type="button" class="btn btn-danger">Save</button>
   </th>


     
    
    </tr>
  </tbody>
</table>
    
    </div>
  </div>
  

  </body>