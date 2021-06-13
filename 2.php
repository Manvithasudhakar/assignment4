<html>
<head>
    <title>Random</title>
    <style type="text/css">
        p {
color:brown;
font-size:90px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
    </style>
</head>
<body style="background-color:pink;">
<p>
    <i>The Current Time:</i>
    <?php    
        date_default_timezone_set("Asia/Kolkata");
        echo date('h:i:s A');
    ?>.
</p>
</body>
</html>