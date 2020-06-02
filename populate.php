<!DOCTYPE "
    
<html>
    <head>
    
        <title>Select test</title>
      
        <script type="text/javascript" charset="utf-8">
      
        </script>
    </head>

    <body>

<form action="" method="POST">
<label >Time</label>
<input type="time" name="tim" >
  <label >Country:</label>
  <select name="country" id="country">
    <option value="CET">CET</option>
    <option value=IST">IST</option>
   
  </select>
 
<button type="submit" name="submit" >Submit</button>

</form>
</body>
</html>

<?php
$ti;
 if(isset($_POST['submit'])){
   
  $ui=$_POST['tim'];
	$un=$_POST['country'];
	
	
 }
echo $ui ."  it's  ".$un;
$timee=date($ui, strtotime("$last_update + 10 hours"));
echo $timee;



?>