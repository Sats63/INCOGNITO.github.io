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
  .c5{
    display: inline-block;
  }
  .c6{
    display: inline-block;
  }
  h1{
    font-size: 2.1rem;
    margin-top: 0%;
  }
  h6 .type{
    font-size: 1rem; 
      font-family: monospace; 
      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;

  }
  h6 .type2{
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
  h6 .type3{
    font-size: 1.4rem; 
      font-family: monospace; 
      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;
        animation-delay: 2s;

  }
  h6 .type4{
    font-size: 1rem; 
      font-family: monospace; 

      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;
        animation-delay: 3s;

  }
  h6 .type5{
    font-size: 1rem; 
      font-family: monospace; 

      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;
        animation-delay: 4s;

  }
  h6 .type6{
    font-size: 1rem; 
      font-family: monospace; 

      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;
        animation-delay: 5s;

  }
  h2 .type6{
    font-size: 2rem; 
      font-family: monospace; 

      overflow: hidden;
      white-space: nowrap; 
      width: 0;
      animation: 
        typing 1s steps(25, end) forwards;
        animation-delay: 5s;

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
    $a =$_GET['id'];
    $ans = $a/2;
    ?>
        <h6><div class="c1"style="color:limegreen; text-shadow: 0px 0px 10px limegreen;
"><div class="type">The amount that you have</div></div>
        <br>
<div class="c2" style="color:limegreen; text-shadow: 0px 0px 10px limegreen;"><div class="type2">right now is </div></div>
<br>
<div class="c3" style="color:limegreen; text-shadow: 0px 0px 10px red;"><div class="type3"><?php echo "$ans";?> rupees</div></div><br>
<div class="c4" style="color:limegreen; text-shadow: 0px 0px 10px limegreen;"><div class="type4">***********</div></div><br>
</h6>
<br>
<span class="action_btn">            
<h2><div class="c5" style="color:limegreen; text-shadow: 0px 0px 10px limegreen;"><div class="type6"><a style="text-decoration:none" href="1.php" style="width: 5em;  height: 2em; font-size: 40px;class="edit_btn" >TRY AGAIN</a></button>
</div></div></h2></span></td>
            </div>

</body>
<script type='text/javascript'>
     self.close();
</script>
</div>
</div>
</html>


















