<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Page</title>
	<style type="text/css">

		fieldset
		{
			border-radius: 30px;
			border: 0px;
			box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
			width: 60%;
        	margin : auto;
            margin-top: 50px;
			padding: 15px;
			padding-bottom: 400px;
			background-color: rgba(0, 0, 0, 0.5);
			color: #fff;
			font-size: 25px;
		}

		html
		{ 
			background-image: url('https://i.postimg.cc/nztGFcMY/cloud2.jpg');
    		background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}

		hr
		{
			border: none;
			height: 5px;
			background: #fff;
			border-radius: 10px;
		}
		.hd{
			font-family: Didot, Didot LT STD, Hoefler Text, Garamond, Calisto MT, Times New Roman, serif;
			font-size: 50px;
			text-align: center;
            padding-top: 30px ;
		}

		.split
        {
            height: 90%;
            width: 50%;
            position: fixed;
            z-index: 1;
            top: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .left
        {
            left: 150px;
        }

        .right
        {
            right: 180px;
        }

		.vl
		{
			border-left: 3px solid rgb(229, 236, 255);
            height: 400px;
		}

        .centered
        {
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
		
		button{
			background-color: rgb(66, 108, 245);
			padding: 10px;
			border: 0;
			border-radius: 25px;
			height: 60px;
			width: 170%;
			font-size: 15px;
			letter-spacing: 1px;
			cursor: pointer;
			color: #fff;
		}



	</style>
</head>
<body>
	<fieldset>
	<p class="hd" >WELCOME TO THE SASSY CULT</p>
	<hr>
	<div class="split left">
		<div class="centered">
			<p>Welcome to the Paradise of SASSY CULT, where you learn the different ways of being a sassy person with some Extra SaSs.If you already are a member of the cult then go ahead and <b>LOGIN </b>gorll~ But if you aren't a member, then what are you waiting for? Click the <b>REGISTRATION </b>Button and become a part of this Cult ASAP!</p>
		</div>
    </div>

    <div class="vl centered"></div>

	<div class="split right">
		<div class="centered">
		<a href="login2.php" target="_blank"><button type="button" class="button">LOG IN</button><br><br>
        <a href="URT.php" target="_blank"><button type="button" class="button">REGISTER</button></a>
		</div>
	</div>
	</fieldset>

</body>
</html>