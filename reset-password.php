


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/style.css">
    <script src="https://kit.fontawesome.com/8b8cc22d8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/bio0xew.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
           

        <div class="row justify-content-center"> 
            <div class="col-4  border  ps-5 pe-5 pt-5 pb-4" id="border-outline">  <!--MAIN OUTLINE-->
                <div class="row justify-content-center"><!--ROW-1-->
                    <div class="col-auto  px-0">
                        <h1 class="title-head">Forgot Password</h1>
                    </div>
                </div>

                
                <form action="process-reset-password.php" method="POST">
                <div class="row g-4"> <!--ROW 3-->
           
           <div class="row"> <!--ROW 5-->
            <div class="col-8 px-0 mb-4"> 
                <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                <input type="password" class="form-control" id="password" aria-describedby="emailHelp" Placeholder="Enter Password">
            </div>
           </div>

           <div class="row"> <!--ROW 5-->
            <div class="col-8 px-0 mb-4">
                <input type="password" class="form-control" id="password again" aria-describedby="emailHelp" Placeholder="Password Again">
            </div>
           </div>

           

           <div class="row"> <!--ROW 7-->
            <div class="col-8 px-0 mb-4">
                <button class="btn-type-1 font-style" type="submit">Change password <img src="right-arrow.png" class="img-icon" alt="" name="action" value="button2"></button>
                <!-- <button class="btn-type-2 font-style" ><a href="#">Account Login</a></button> -->
              
            </div>
        
           </div>
        </form>
       
           



























    </div>


    <script src="/bootstrap-5.3.0/dist/js/bootstrap.js"></script>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>
