<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>




body{
    background: #000000;
    min-height:100vh;
    display:flex;
    justify-content:space-evenly;
    align-items:center;
  }
  
  .dropdown {
    display: inline-block;
    position: relative;
  }
  
  button{
    size: 300px;
    font-style:unset;
    border:none;
    border-radius:5px;
    padding:15px 30px;
   background-color: #2a5555;
    cursor:pointer;
    margin: 0;
  
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;

  }
  
  button:hover{
   
    color: #fff;
    background-color: #244848;
    border-color: #224444 ;
  }
  
  .dropdown-options {
    display: none;
    position: absolute;
    overflow: auto;
    background-color:#fff;
    border-radius:5px;
    box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
  }
  
  .dropdown:hover .dropdown-options {
    display: block;
  }
  
  .dropdown-options a {
    display: block;
    color: #000000;
    padding: 5px;
    text-decoration: none;
    padding:20px 40px;
  }
  
  .dropdown-options a:hover {
    color: #0a0a23;
    background-color: #ddd;
    border-radius:5px;
  }

    </style>
    
</head>


<body>
    



       <div class="dropdown">
        <button>Profile</button>
        <div class="dropdown-options">
          <a href="#">Dashboard</a>
          <a href="#">Setting</a>
          <a href="#">Logout</a>
        </div>
     </div>


      <div class="dropdown">
        <button>Profile</button>
        <div class="dropdown-options">
          <a href="#">Dashboard</a>
          <a href="#">Setting</a>
          <a href="#">Logout</a>
        </div>
      </div>


      <div class="dropdown">
        <button>Profile</button>
        <div class="dropdown-options">
          <a href="#">Dashboard</a>
          <a href="#">Setting</a>
          <a href="#">Logout</a>
        </div>
      </div>


      <div class="dropdown">
        <button>Profile</button>
        <div class="dropdown-options">
          <a href="#">Dashboard</a>
          <a href="#">Setting</a>
          <a href="#">Logout</a>
        </div>
      </div>



  <a href="index.html"><button>Home</button></a>
    
</body>
</html>