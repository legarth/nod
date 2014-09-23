<!DOCTYPE html>
<?php include 'datafetch.php'; ?>
<html>
<head>
<style>

  h1   {color:white}
  p    {color:white}
  table    {color:white}
  body {
   font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
   font-weight: 300; background-color:#a71681;
}
  .nodlogo
  {
    position: absolute;
    left: 35px;
    top: 25px;
    width: 320px;
    height: 145px;
  }
  .nodheader
  {
    position: absolute;
    top: 190px;
    margin:0px 25px 0px 25px;
  }
  .noddata
  {
    position: absolute;
    top: 240px;
    margin:0px 25px 0px 25px;
    width:300px;
  }  
</style>
</head>
<body>
<img src="img/NodLogoCroppedNoLine.png" class="nodlogo">

<h1 id="header" class="nodheader">
Whitestuff Nod report
</h1>

<table style= id="data" class="noddata">
<!--tr><td>WhitestuffOne</td><td>3</td></tr><tr><td>WhtestuffTwo</td><td>1</td></tr-->

</table>
<?php foo();?>
</p>

</body>
</html>




