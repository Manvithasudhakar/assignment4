<!doctype html>
<html>
<body style="background-color:pink;color:brown;@import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap'); font-family: 'Pattaya', sans-serif;">
<form method="post"><br><br>
    Enter the Number : <input type="text" name="no" /><br><br>
    <input type="reset" value="Reset" />
    <input type="submit" name="submit" value="Submit" /><br><br>
</form>
<?php
  if(isset($_POST['submit']))
  {
    function factorial($n)
    {
      if($n ==0)
        {
         return 1;
        }
      else 
        { 
         return $n * factorial($n-1);
        }
    }
    print_r("Factorial of ".$_POST['no']." is :\n".factorial($_POST['no']));
  }
?>
</body>
</html>