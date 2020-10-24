<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Assignment4</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css?ver=<?php echo rand(2,3);?>">
      <style>
          *{
              padding:0px;
              margin:0px;
              box-sizing:border-box;
          }
          body{
              background-color:white;
          }
          .maindiv{
            margin: 0 auto;
    width: 30%;
          }
          .firstdiv{
            border: 2px solid #d02d21;
    padding: 43px 43px;
    margin: 0 auto;
    position: absolute;
    transform: translate(153px, 47px);
          }
          .seconddiv{
            margin-top: 40px;
          }
          .child1{
            float: left;
    width: 50%;
          }
          .child2{
            float: left;
    width: 50%;
          }
          .seconddiv1{
            border: 2px solid pink;
    padding: 45px 0;
          }
          .seconddiv2{
            border:2px solid yellow;
            padding: 45px 0;
          }
          .seconddiv3{
            border:1px solid green; 
            padding: 45px 0; 
          }
          .seconddiv4{
            border:1px solid red; 
            padding: 45px 0;
          }
      </style>
          </head>
    <body>
   
        <div class="maindiv">
        <div class="firstdiv"></div>   

  <div class="seconddiv">

  <div class="child1">
    <div class="seconddiv1"></div>
  </div>
  
  <div class="child1">
    <div class="seconddiv2"></div>
  </div>

  <div class="child2">
    <div class="seconddiv3"></div>
  </div>

  <div class="child2">
    <div class="seconddiv4"></div>
  </div>
  
</div>
       </div>
</body>
</html>