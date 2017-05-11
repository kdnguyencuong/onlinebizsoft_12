<?php 
	require_once (__DIR__.'/menu_class.php');
	require_once (__DIR__.'/menu_insert.php');
	require_once (__DIR__.'/menu_select.php');
	require_once (__DIR__.'/menu_dequi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menu</title>
	<link rel="stylesheet" href="">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<style>
		.container{
			width: 1000px;
			margin: 0 auto;
		}
	</style>

	<?php 
		$dequi = new Dequi();
		$select = new Select();
		
		if(isset($_POST['submit'])){
			$menu_name = $_POST['menu_name'];
			$parent_id = (int)$_POST['select_parent'];
			$data = array('menu_name'=>$menu_name,'parent_id'=>$parent_id);

			$insert = new Insert($data);
			header('Location:'.$_SERVER['PHP_SELF']);
			// echo '<pre>';
			// print_r($menu->data);
			// echo '</pre>';
		}
	?>
</head>
<body>
	<div class="container">
		<div class="menu">
			<form action="" method="post">
				<table border="1">
					<tr>
						<td colspan="2">
							THÊM MENU
						</td>
					</tr>
					<tr>
						<td>
							Menu name:
						</td>
						<td>
							<input type="text" name="menu_name" id="menu_name" value="">
						</td>
					</tr>
					<tr>
						<td>Parent id:</td>
						<td>
							<select name="select_parent" id="">
								<option value="" selected> ---- CHỌN ------- </option>
								<?php $dequi->parent($select->data); ?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" id="submit" value="THÊM"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="tree html">
			<table border="1" cellspacing="0" cellpadding="5">
			    <?php $dequi->tree($select->data); ?>
			</table>
		</div>
	</div>
	<script>
	
	
	$('#submit').click(function(){
		var menu_name = $('#menu_name').val();
		if(menu_name == ''){
			alert('Tên menu không được để trống');
			$('#menu_name').focus();
			return false;
		}

		return true;
	});
		
	</script>
</body>
</html>