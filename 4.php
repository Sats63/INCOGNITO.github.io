<!DOCTYPE html>
<html>
<head>
<title>sats</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<style>
body{
    background: navajowhite;
    background-size: cover;
    font-family: monospace; 
  }
  a{
    color: mediumseagreen;
  }
  .c1{
    display: inline-block;
  }
  .c2{
    display: inline-block;
  }
  .c3{
    display: inline-block;
  }
  .c4{
    display: inline-block;
  }
  h1{
    font-size: 2.1rem;
    margin-top: 0%;
  }
  h4 .type{
      font-size: 1rem;
      font-family: monospace; 
      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;

  }
  h4 .type2{
      font-size: 1rem; 
      font-family: monospace;
      text-align:center;
      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;
        animation-delay: 1s;

  }
  h4 .type3{
      font-size: 1rem; 
      font-family: monospace; 
      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;
        animation-delay: 2s;

  }
  h4 .type4{
      font-size: 1rem; 
      font-family: monospace; 

      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;
        animation-delay: 4s;

  }
  @keyframes typing {
    from { width: 0  }
    to { width: 100% }
 

  }
  @keyframes blink {
    from { border-color: transparent }
    to { border-color: limegreen; }
  }
  
  * {
    box-sizing: border-box;
  }
  
  p {
    font-family: arial;
    font-weight: bold;
    font-size: 1.1vh;
    margin: 0;
    padding: 0;
    line-height: 1;
    color: limegreen;
    text-shadow: 0px 0px 10px limegreen;
  }

  .action_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.action_btn>a {
    text-decoration: none;
    color: limegreen;
    background: black;
    border: 1px solid;
    display: inline-block;
    padding: 7px 20px;
    font-weight: bold;
    border-radius: 5px;
    transition: 0.3s ease-in-out;
    border-color: limegreen;
    box-shadow: 0 0 6px limegreen;


}




.action_btn>a:hover {
    box-shadow: 0 5px 10px #0003;
}  
</style>  
<body style="background-color:black;">

<div class="w3-row-padding w3-center">

  <div class="w3-center w3-first ">
  <h1 style="color:limegreen;text-shadow: 0 0 6px limegreen;
">
!NC0GN!70</h1>
        <?php

$a=rand(1,9);

?>
        <h4><div class="c1"style="color:limegreen; text-shadow: 0px 0px 10px limegreen;
"><div class="type">Now I will give you <?php echo "$a";?> rupees,</div></div>
        <br>
<div class="c2" style="color:limegreen; text-shadow: 0px 0px 10px limegreen;"><div class="type2"> add them as well</div></div>
</h4><br>
<span class="action_btn">            
<a style="text-decoration:none" href="5.php?id=<?php echo $a;?>" style="width: 5em;  height: 2em; font-size: 13px;class="edit_btn" >NEXT</a></button>
            </span></td>
            </div>

  <div class="w3-center w3-second ">
  <!--<link rel="stylesheet" href="css.css">-->
  <br>
  <br>
<div style="color:green;text-shadow: 0px 0px 8px red;"><br>Scanning</div>
    <br><div id="console">
    </div> 
    <script src="script.js"></script>

</body>
</div>
</div>
</html>



