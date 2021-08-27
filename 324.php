<!DOCTYPE html>
<html>
    <head>
        <title>TEMPERATURE CONVERSION</title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="temp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>TEMPERATURE CONVERSION</h1>
        <div class="main">
            <div class="center">
                <div class="left">
                  <img src="https://images.unsplash.com/photo-1534794048419-48e110dca88e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8d2VhdGhlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="right">
                 <form method="POST">
                     <div class="input"><input type="text" name="temp" placeholder="Enter Value"></div>
                     
                     <div class="Selection">
                         <label>Celcius</label>
                         <input type="Radio" name="unit" value="cel">
                         <label>Faren</label>
                         <input type="Radio" name="unit" value="far">
                     </div>
                     <div class="Submit"><input type="Submit" name="submit" value="Convert"></div>
                     
                     <div>
                         <p>
                             <?php
                             if(isset($_POST['submit'])){
                                 $inp=$_POST['temp'];
                                 $temp=$_POST['unit'];
                                 if($temp=="cel"){
                                     $res=$inp *9 /5 +32;
                                     echo "$res *C";
                                     }
                              else{
                                  $res=($inp-32)*5/9;
                                  echo "$res *F";
                                     }
                                    }
                             ?>
                         </p>
                     </div>

                 </form>
                </div>
            </div>
        </div>
    </body>
</html>