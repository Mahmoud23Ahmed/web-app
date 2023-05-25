<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>body {
    align-items: center;
    background-color: #000;
    display: flex;
    justify-content: center;
    height: 100vh;
  }
  
  .form {
    background-color: #2a5555;
    border-radius: 20px;
    box-sizing: border-box;
    height: 500px;
    padding: 20px;
    width: 320px;
  }
  
  .title {
    color: #eee;
    font-family: sans-serif;
    font-size: 36px;
    font-weight: 600;
    margin-top: 30px;
  }
  
  .subtitle {
    color: #eee;
    font-family: sans-serif;
    font-size: 16px;
    font-weight: 600;
    margin-top: 10px;
  }
  
  .input-container {
    height: 50px;
    position: relative;
    width: 100%;
  }
  
  .ic1 {
    margin-top: 40px;
  }
  
  
  
  .input {
    background-color: #303245;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    font-size: 18px;
    height: 50px;
    outline: 0;
    padding: 4px 20px 0;
    width:100%;
  }
  
  
  
  
  
  
  
  
  
  .submit {
    background-color: rgb(0, 0, 0);
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    cursor: pointer;
    font-size: 18px;
    height: 50px;
    margin-top: 38px;
     outline: 0;
    text-align: center;
    width: 100%;}
    body {
        align-items: center;
        background-color: #000;
        display: flex;
        justify-content: center;
        height: 100vh;
      }
      
      .form {
        background-color: #2a5555;
        border-radius: 20px;
        box-sizing: border-box;
        height: 500px;
        padding: 20px;
        width: 320px;
      }
      
      .title {
        color: #eee;
        font-family: sans-serif;
        font-size: 36px;
        font-weight: 600;
        margin-top: 30px;
      }
      
      .subtitle {
        color: #eee;
        font-family: sans-serif;
        font-size: 16px;
        font-weight: 600;
        margin-top: 10px;
      }
      
      .input-container {
        height: 50px;
        position: relative;
        width: 100%;
      }
      
      .ic1 {
        margin-top: 40px;
      }
      
      .ic2 {
        margin-top: 15px;
      }
    
      .ic3 {
        margin-top: 15px;
      }
    
      .ic4 {
        margin-top: 15px;
      }
      
      .input {
        background-color: #303245;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        font-size: 18px;
        height: 100%;
        outline: 0;
        padding: 4px 20px 0;
        width: 100%;
      }
      
      
      
      .submit {
        background-color: rgb(0, 0, 0);
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        cursor: pointer;
        font-size: 18px;
        height: 50px;
        margin-top: 38px;
         outline: 0;
        text-align: center;
        width: 100%;
      }
      
      .submit:active {
        background-color: #06b;
      }
      
  
  
  .submit:active {
    background-color: #06b;
  }
  
  a{

    color: rgb(174, 168, 168);
    padding-left: 40%;
    line-clamp: none;
    
      }
    
    
      #parent{
         margin-top: 50px;
        white-space: nowrap;
        margin-left: 40px;
      }
    
      .child{
    
    display: inline-block;
    
      }
    
      a{
    
        text-decoration: none;
      }</style>
</head>
<body>
    

    <div class="form">
        <div class="title">Welcome</div>
        <div class="subtitle">Let's create your department </div>

        <div class="input-container ic1">
          <input id="firstname" class="input" type="text" placeholder=" Name " />
          
         
        </div>

        <div class="input-container ic2">
          <input id="lastname" class="input" type="text" placeholder=" Code" />
          
          
        </div>

        

       
        <button type="text" class="submit">Add</button>
<br><br><br><br><br><br><br><br>
        <div id="parent">
            <div class="child"> <a  href="admin1.html">Back</a> </div><div class="child
            "></div><a class="child" href="index.html">Home</a></div>
      </div>

</body>
</html>