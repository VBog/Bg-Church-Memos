<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html> 
<head> 
<title>Записки в храм</title> 
<meta http-equiv="Content-Language" content="ru"> 
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"> 
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script type="text/javascript" src="js/main.js"></script>
</head> 
<body  bgcolor="gray" onload="main()"> 
	<div style="position:absolute;top:10px;left:0px;width:1000px;height:20px;" align="right"> 
		<input onClick="saveNames();" type="button" value="Сохранить"> 
		<input onClick="duplicateDown();" type="button" value="Дублировать"> 
		<input onClick="clearNames();" type="button" value="Очистить"> 
		<input onClick="printTab();" type="button" value="Печатать..."> 
	</div> 
	<div style="position:absolute;top:40px;left:0px;width:1000px;height:1480px;"> 
		<img id="paper" src="note.png" width="1000px" height="1430px" />
	</div>
	<div style="position:absolute;top:240px;left:80px;width:400px;height:490px;"> 
		<div style="padding-top:15px;"><span class="text_o0"></span></div>
		<div style="padding-top:15px;"><input id="o000" name="o000" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o001" name="o001" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o002" name="o002" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o003" name="o003" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o004" name="o004" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o005" name="o005" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o006" name="o006" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o007" name="o007" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o008" name="o008" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o009" name="o009" type="text" size="27" maxlength="27" style="width:85%;"></div>
	</div> 
 
	<div style="position:absolute;top:240px;left:590px;width:400px;height:490px;"> 
		<div style="padding-top:15px;"><span class="text_o1"></span></div>
		<div style="padding-top:15px;"><input id="o100" name="o100" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o101" name="o101" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o102" name="o102" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o103" name="o103" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o104" name="o104" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o105" name="o105" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o106" name="o106" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o107" name="o107" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o108" name="o108" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o109" name="o109" type="text" size="27" maxlength="27" style="width:85%;"></div>
	</div> 
 
	<div style="position:absolute;top:1020px;left:70px;width:400px;height:490px;"> 
		<div style="padding-top:15px;"><span class="text_o0"></span></div>
		<div style="padding-top:15px;"><input id="o010" name="o010" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o011" name="o011" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o012" name="o012" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o013" name="o013" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o014" name="o014" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o015" name="o015" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o016" name="o016" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o017" name="o017" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o018" name="o018" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o019" name="o019" type="text" size="27" maxlength="27" style="width:85%;"></div>
	</div> 
 
	<div style="position:absolute;top:1020px;left:580px;width:400px;height:490px;"> 
		<div style="padding-top:15px;"><span class="text_o1"></span></div>
		<div style="padding-top:15px;"><input id="o110" name="o110" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o111" name="o111" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o112" name="o112" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o113" name="o113" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o114" name="o114" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o115" name="o115" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o116" name="o116" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o117" name="o117" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o118" name="o118" type="text" size="27" maxlength="27" style="width:85%;"></div>
		<div style="padding-top:15px;"><input id="o119" name="o119" type="text" size="27" maxlength="27" style="width:85%;"></div>
	</div> 
	<div style="position:absolute;top:1480px;left:0px;width:1000px;height:40px;" align="right"> 
		<input onClick="saveNames();" type="button" value="Сохранить"> 
		<input onClick="duplicateUp();" type="button" value="Дублировать"> 
		<input onClick="clearNames();" type="button" value="Очистить"> 
		<input onClick="printTab();" type="button" value="Печатать..."> 
	</div> 
</body> 
</html>	