<html>
<head>
    <title>Random</title>

</head>
<body style=" background-color: pink; color:brown;@import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap'); font-family: 'Pattaya', sans-serif;">
<h2><p>Number generated randomly is  <?php
    $choice = rand(1, 100);
    echo $choice;
?>.</p><p>Its square root is <?php
    echo round(sqrt($choice),3);
?>.</p></h2>
</body>
</html>