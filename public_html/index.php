<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Shadowrun</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>


<body style="background: url('pictures/back2.jpg') 0 0">

    
    <?php
    require_once("back/select_categories.php");
    ?>

    <div style="min-width: 905px; max-width: 905px; margin: 0 auto;">
        <div style="width: 200px; position: relative; background-color: #fc990487;" class="base">
	Category<br>
		<select name="Select1" id="updcat">
		<option value="">--Please choose an option--
			<?php
			foreach ($array as &$value)
			{?>
			<option value="<?php echo $value?>"><?php echo $value?></option>
			<?php }
			?>
		</select>
	</div>
	<div style="width: 200px; position: relative; left: 0px; top: 0px; background-color: #fc990487;" class="base">
	Weapon<br>
		<select name="Select2" id="updweapon">
		<option value="">--Please choose an option--
			<?php
			foreach ($array1 as &$value)
			{?>
			<option value="<?php echo $value?>"><?php echo $value?></option>
			<?php }
			?>
		</select>
	</div>
	<div style="width: 90px; height: 38px" class="base">
	Damage<br>
	<label id="Label1"></label></div>
	<div style="width: 100px; height: 38px; position: relative; left: 100px; top: -48px;" class="base">
	AP<br>
	<label id="Label2"></label></div>
	<div style="width: 200px; position: relative; left: 0px; top: -50px; background-color: #ff000046;" class="base">
	Strength<br>
	<input name="Text1" type="number" style="width: 172px" max="20" min="1">
	</div>
	
	
	<div style="width: 130px; position: relative; left: 220px; top: -238px; height: 118px; background-color: #ffd90071;" class="base">
		<br>Attack<br>
		<label id="Label3" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
		<img id="atackcount" alt="" src="pictures/dice.jpg" height="23" style="position: relative; left: 0px; top: 40px; z-index: 1" width="25">
	</div>
	<div style="width: 130px; position: relative; left: 360px; top: -366px; height: 117px;" class="base">
		<br>Accuracy<br>
		<label id="Label4" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
	</div>
	<div style="width: 270px; position: relative; left: 220px; top: -355px; height: 42px; background-color: #ff00002e;" class="base">
		Attack dicepool<br>
		<input name="Text2" type="number" min="0"><br>
	</div>
	<div style="width: 200px; position: relative; left: 510px; top: -545px; height: 116px; background-color: #ffd90071;" class="base">
		<br>Dodge<br>
		<label id="Label5" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
		<img id="dodgecount" alt="" src="pictures/dice.jpg" height="23" style="position: relative; left: 0px; top: 40px; z-index: 1" width="25">
	</div>
	<div style="width: 200px; position: relative; left: 510px; top: -532px; height: 39px; background-color: #1eff0046;" class="base">
	Dodge dicepool<br>
		<input name="Text3" type="number" min="0"><br>
	</div>
	<div style="width: 130px; position: relative; left: 720px; top: -720px; height: 115px;" class="base">
		<br>Net hits<br>
		<label id="Label6" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
	</div>
	<div style="width: 130px; position: relative; left: 220px; top: -610px; height: 153px;" class="base">
		<br>Damage<br>
		<label id="Label7" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
	</div>
	<div style="width: 130px; position: relative; left: 360px; top: -773px; height: 153px;" class="base">
		<br>Net hits<br>
		<label id="Label8" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
	</div>
	<div style="width: 200px; position: relative; left: 510px; top: -937px; height: 100px; background-color: #ffd90071;" class="base">
		<br>Resist<br>
		<label id="Label9" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
		<img id="resistcount" alt="" src="pictures/dice.jpg" height="23" style="position: relative; left: 0px; top: 40px; z-index: 1" width="25">
	</div>
	<div style="width: 200px; position: relative; left: 510px; top: -927px; height: 42px; background-color: #1eff0046;" class="base">
		Resist dicepool<br>
		<input name="Text4" type="number" min="0"><br>
	</div>
	<div style="width: 170px; position: relative; left: 720px; top: -1100px; height: 162px;" class="base">
		<p style="position: relative; left: 30px; top: 5px; width: 50px;">Damage taken</p><br>
		<span lang="ru">
		<label id="Label10" style="position: absolute; z-index: 1; top: 46px; left: 56px;">
		</label></span><p style="position: relative; left: 105px; top: -75px; width: 25px">type</p><br>
		<label id="Label11" style="position: absolute; z-index: 1; top: 46px; left: 117px; height: 19px;"></label>
	</div>
	<div style="width: 131px; position: relative; left: 720px; top: -1100px; height: 42px; background-color: #fc990487;" class="base">
	<button id="countdamage">count</button>
	</div>

	<div>
		<input type="hidden" id="type"></input>
	</div>
    </div>
    
</body>



	<script src="scripts/jquerry-3.3.1.min.js"></script>
	<script src="scripts/script.js"></script>
</html>