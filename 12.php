<?php
	if(isset($_POST['submit'])) {
		$option = $_POST['option'];
		if($option == '1')
		{
			$item_sl = '101'; 
			$item_name = 'Pen';
			$item_price = '10';
			$item_code = 'P101';
		}
		elseif ($option == '2') {
			$item_sl = '102';
			$item_name = 'Pencil';
			$item_price = '5';
			$item_code = 'P102';
		}
		elseif ($option == '3') {
			$item_sl = '103';
			$item_name = 'Scale';
			$item_price = '15';
			$item_code = 'P103';
		}
	}
?>
<?php
$qty = '';
$item_total = '';
	if(isset($_POST['sub'])) {
		$qty = $_POST['qty'];
		$item_sl = $_POST['sl_num'];
		$item_name = $_POST['item_name'];
		$item_price = $_POST['item_price'];
		$item_code = $_POST['item_code'];
		$item_total = $qty * $item_price;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Item Bill</title>
</head>
<body style="background-color:pink;color:brown;@import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap'); font-family: 'Pattaya', sans-serif;">
		<form action="" method="POST">
			<h2><i>Select Your Item<i></h2>
			<select name="option" required>
    		<option value="" disabled selected>Select</option>
    		<option value="1"><i>Pen<i></option>
   			<option value="2"><i>Pencil<i></option>
   			<option value="3"><i>Scale<i></option>
            </select>
            <br><br>
            <input  type="submit" name="submit" ><br><br>
		</form>
	
					<h2><i>Item Info<i></h2>
	
		<table >
			<tr>
			<td>Item Number</td>
			<form method="POST">
			<td>
				<input type="text" name="sl_num" value="<?php echo $item_sl; ?>" readonly>
			</td></tr>
			<tr>
				<td>Item Name</td>
				<td><input type="text" name="item_name" value="<?php echo $item_name; ?>" readonly></td>
			</tr>
			<tr>
			<td>Item Price</td>
				<td>
				<input type="text" name="item_price" value="<?php echo $item_price; ?>" readonly>
				</td></tr>
			<tr>
				<td>Item Code</td>
				<td><input type="text" name="item_code" value="<?php echo $item_code; ?>" readonly></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="text" name="qty" required></td>
			</tr><br>
		</table><br>
		<input type="submit" name="sub"><br><br>
		</form>
	    <h2>Bill</h2>
		<br>
		<table border="1">
			<tr>
				<th>Item Name</th>
				<th>Item Code</th>
				<th>Item Price</th>
				<th>Quantity</th>
				<th>Date of purchase</th>
				<th>Total Amount</th>
			</tr>
			<tr>
				<td><?php echo $item_name; ?></td>
				<td><?php echo $item_code; ?></td>
				<td><?php echo $item_price; ?></td>
				<td><?php echo $qty; ?></td>
				<td><?php echo date("d/m/Y"); ?></td>
				<td><?php echo $item_total; ?></td>
			</tr>
		</table>
		<br><br>
</body>	
</html>
