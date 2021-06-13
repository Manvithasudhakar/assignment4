<html>
<head>
<title>string</title>
</head>
<body style="background-color:pink;color: brown;">
     <h2><i>
        String Operations<i>
    </h2>
     
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the String" required />
        <br><br>
        <input type="radio" name="string"  value="reverse" required/><i>Reverse <i><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="radio" name="string"  value="length"/><i>Length of String <i><br>
        <input type="radio" name="string"  value="substring"/><i>Substring<i> <br>
        <input type="radio" name="string"  value="upper"/><i>Uppercase<i> <br>
        <input type="radio" name="string"  value="lower"/><i>Lowercase <i><br>
        &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<input type="radio" name="string"  value="words"/><i>Number of words <i><br>
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>

 
<?php   
    if($_POST)  
    {   
        $string =$_POST['string'];
        $txt = $_POST['txt'];

        switch($string){
            case 'reverse': $rev = strrev($txt);
                            echo 'The reversed string of '. $txt. ' is: '. $rev;
                            break;
            case 'length': $len = strlen($txt);
                            echo "The length of the string ".$txt. " is: ". $len;
                            break;
            case 'substring':$sub = substr($txt, 5, 13);
                            echo "The substring of the string ".$txt. " is: ". $sub;
                            break;
            case 'upper': $up = strtoupper($txt);
                            echo "The string ".$txt. " in uppercase is: ". $up;
                            break;
            case 'lower':$low = strtolower($txt);
                            echo "The string ".$txt. " in lowercase is: ". $low;
                            break;
            case 'words':$wrd = str_word_count($txt);
                            echo "The number of words in the string ".$txt. " is: ". $wrd;
                            break;

        }
       
    }     
?> 
</body>
</html>


