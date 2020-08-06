  <style>
        
        .body{
margin-top: 80px;
width: 950px;
margin-left: auto;
margin-right: auto;
height: 500px;
	background-color: #ADADAD;
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index:40;
        opacity: 1;
        background-image: url("images/3.jpg");
}

        .body1{
margin-top: -50px;
width: 950px;
margin-left: auto;
margin-right: auto;
height: 500px;
	background-color: #ADADAD;
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index:45;
        opacity: 1;
        background-image: url("images/3.jpg");
}



.header{
	position: absolute;
        margin-top: -120px;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
        
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
    margin-top: -120px;
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=radio]{
    margin-top: 10px;
	width: 50px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.ge{
    width: 250px;
	height: 30px;
	background: transparent;
	
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
#form1
{
    z-index: 50;
    margin: auto;
    position:relative;
}

</style>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
<div id='form1'>

        <div class="body"  style=" opacity: 1"></div>  
		
        <div class="header" style="opacity:1;margin-top:1px;">
			<div>Verify  Phone NO.</div>                                                                                                                                                                                                                                                                                                                                           
		</div>
        <br>
        <div class="login" style="margin-left: 70px;margin-top:1px;">
                                       
                    <form method="post" action="">
                       
                        <input type="text" placeholder="Enter 6 digit Verification code" name="cod"/><br>
                                <input type="submit" name="submits" value="Submit"/>
                       
				
                    </form>
                    
           
                    
                </div>        
		</div>