<html>
<head><title>Arm strong</title></head>
<body style="background-color:pink;color: brown; font-style:italic;@import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap'); font-family: 'Pattaya', sans-serif;">
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $total=0;  
        $x=$num;  
        while($x!=0)  
        {  
        $rem=$x%10;  
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
        }  
        //echo "Given number: $num"; 
       // echo "</br>";
        echo "Total: $total"; 
        echo "</br>";
        if($num==$total)  
        {  
        echo " it is an Armstrong number";  
        }  
        else  
        {  
        echo "it is not an armstrong number";  
        }  
    }     
?> 
</body>
</html>


