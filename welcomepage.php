<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
       <title>logout page</title>
   <style>
    html
    { 
    	background-image: url('https://i.postimg.cc/nztGFcMY/cloud2.jpg');
    	background-repeat: no-repeat;);
		background-attachment: fixed;
		background-size: cover;
	}
    fieldset
	{
		border: 4px solid rgb(229, 236, 255);
		width: 50%;
        margin-left : 21%;
		padding: 50px;
		padding-bottom: 200px;
		background-color:#CEA3FF;
	}

    h2
	{
	    text-align: center;
	    color: black;
        font-size: 40px;
        font-family: fantasy;
        padding-top: 30px ;
	}
    
    table
    {
        font-family: sans-serif;
        margin-left: auto; 
		margin-right: auto;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    td
    {
        text-align: left;
        padding: 8px;
        color: black;
        font-size: larger;
    }
    
    .button{
    		background-color: red;
            border: 1px;
            border-radius: 15px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin-top: 5px;
            margin-right: 3px;
            position:absolute;
            top:0;
            right:0;
            cursor: pointer;
            width: 200px;
            height: 55px

    		}    

    </style>
    </head>
<body>
    <h1>User Details</h1>
    <a href="logout.php"><button type="button" class="button">logout</button></a>
 <fieldset>
        <table>
               <tr>
                    <td>NAME:</td><td><?php echo $_SESSION['name']; ?></td>
                </tr>
                <tr>
                    <td>EMAIL:</td><td><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td>GENDER:</td><td><?php echo $_SESSION['gender']; ?></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td><td><?php echo "************"; ?></td>
                </tr>
         
        </table>
    </fieldset>
</body>
</html>