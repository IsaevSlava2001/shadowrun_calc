<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Shadowrun</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body style="background-image:url('pictures/back2.jpg'); height: 994px; width: 1500px;"">
<?php
require_once("back/select_categories.php");
?>
	<div style="width: 184px; position: relative;" class="auto-style1">
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
	<div style="width: 184px; position: relative; left: 0px; top: 0px;" class="auto-style1">
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
	<div style="width: 92px; height: 38px" class="auto-style1">
	Damage<br>
	<label id="Label1"></label></div>
	<div style="width: 92px; position: relative; left: 92px; top: -38px;" class="auto-style1">
	AP<br>
	<label id="Label2"></label></div>
	<div style="width: 184px; position: relative; left: 0px; top: -38px;" class="auto-style1">
	Strength<br>
	<input name="Text1" type="number" style="width: 172px" max="20" min="1">
	</div>
	
	
	<div style="width: 130px; position: relative; left: 186px; top: -201px; height: 118px;" class="auto-style1">
		<br>Attack<br>
		<label id="Label3" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
		<img id="atackcount" alt="" src="pictures/dice.jpg" height="23" style="position: relative; left: 0px; top: 40px; z-index: 1" width="25">
	</div>
	<div style="width: 130px; position: relative; left: 317px; top: -318px; height: 117px;" class="auto-style1">
		<br>Accuracy<br>
		<label id="Label4" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
	</div>
	<div style="width: 261px; position: relative; left: 186px; top: -315px; height: 42px;" class="auto-style1">
		Attack dicepool<br>
		<input name="Text2" type="number" min="0"><br>
	</div>
	<div style="width: 130px; position: relative; left: 446px; top: -477px; height: 116px;" class="auto-style1">
		<br>Dodge<br>
		<label id="Label5" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
		<img id="dodgecount" alt="" src="pictures/dice.jpg" height="23" style="position: relative; left: 0px; top: 40px; z-index: 1" width="25">
	</div>
	<div style="width: 129px; position: relative; left: 448px; top: -473px; height: 39px;" class="auto-style1">
		dodge dicepool<br>
		<input name="Text3" type="number" min="0"><br>
	</div>
	<div style="width: 130px; position: relative; left: 646px; top: -629px; height: 153px;" class="auto-style1">
		<br>Net hits<br>
		<label id="Label6" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
	</div>
	<div style="width: 130px; position: relative; left: 186px; top: -623px; height: 153px;" class="auto-style1">
		<br>Damage<br>
		<label id="Label7" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
	</div>
	<div style="width: 130px; position: relative; left: 317px; top: -774px; height: 153px;" class="auto-style1">
		<br>Net hits<br>
		<label id="Label8" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
	</div>
	<div style="width: 130px; position: relative; left: 447px; top: -928px; height: 112px;" class="auto-style1">
		<br>Resist<br>
		<label id="Label9" style="position: absolute; z-index: 1; top: 46px; left: 56px;"></label>
		<img id="resistcount" alt="" src="pictures/dice.jpg" height="23" style="position: relative; left: 0px; top: 40px; z-index: 1" width="25">
	</div>
	<div style="width: 131px; position: relative; left: 447px; top: -927px; height: 42px;" class="auto-style1">
		Resist dicepool<br>
		<input name="Text4" type="number" min="0"><br>
	</div>
	<div style="width: 167px; position: relative; left: 639px; top: -1084px; height: 153px;" class="auto-style1">
		<p style="position: relative; left: 30px; top: 5px; width: 50px;">Damage taken</p><br>
		<span lang="ru">
		<label id="Label10" style="position: absolute; z-index: 1; top: 46px; left: 56px;">
		</label></span><p style="position: relative; left: 105px; top: -75px; width: 25px">type</p><br>
		<label id="Label11" style="position: absolute; z-index: 1; top: 46px; left: 117px; height: 19px;"></label>
	</div>
	<div style="width: 131px; position: relative; left: 627px; top: -1132px; height: 42px;" class="auto-style1">
	<button id="countdamage">count</button>
	</div>
	<div>
		<input type="hidden" id="type"></input>
	</div>
    </body>
	<script src="scripts/jquerry-3.3.1.min.js"></script>
	<script src="scripts/script.js"></script>
</html>