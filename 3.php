<html>
<head>
    <title>reverse</title>
</head>
<body style="background-color:pink;color: brown;font-style:italic;">
    <form method="post">        
Enter a number: <input type="text" name="num"/><br>  
<br>
<button style="background-color:wheat;" type="submit"><i>Check</i></button>  
</form> 

<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $ori_num = $num;
        $rev_num = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum += $rem;
            $rev_num = $rev_num * 10 + $rem;
            $num = (int)$num / 10;
        }
        echo "Sum of the digits of $ori_num is $sum"; 
        echo "</br>";
        if($ori_num == $rev_num){  
            echo "Number $ori_num is Palindrome";     
        }else{  
            echo "Number $ori_num is not a Palindrome";   
        }  
}     
      ?> 

</body>
</html>



