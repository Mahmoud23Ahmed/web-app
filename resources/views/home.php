<php>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menofia university</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="home.css">




</head>
<body>
  
   
   <div class="masthead">
       <div class="masthead-content text-white">
           <div class="container-fluid px-4 px-lg-0">
               <h1 class="fst-italic lh-1 mb-4">Menofia university</h1>
               

               <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="/home" method="checklogin">
                   <div class="row input-group-newsletter">
                       <div class="col"><input class="form-control" id="username" type="username" placeholder="username" aria-label="Enter username ..." data-sb-validations="required,username" /></div>
                       <div class="pass"> <input class="ipass" type="password" placeholder="*******" aria-label="password">  </div>
                   </div>
<br>
                     <div class="radio-group">
                      <label>
                      <input type="radio" value="student" name="kind ">
                      student
                      <span></span>
                     </label>
                     <label>
                      <input type="radio" value="docter" name="kind ">
                      docter
                      <span></span>
                     </label>
                     <label>
                      <input type="radio" value="admin" name="kind ">
                      admin 
                      <span></span>
                     </label>
                    </div>
                       
               
<br>
                    <div class="row ">
                   <div class="col-auto"> <button class="btn btn-primary "  role="button" >sign in</button></div>
                   
                    
               </form>
           </div>
       </div>
   </div>
   
   
 
    
</body>
</html>
</php>
