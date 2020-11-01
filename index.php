<!DOCTYPE>
<html>
<head>
<title>Student Details</title>

<style>

@import url(http://fonts.googleapis.com/css?family=Raleway);


#main{
width:960px;
margin:50px auto;
font-family: 'Raleway', sans-serif;
}

h2{
background-color: #1f6f8b;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 15px;
}
hr{
border:0;
border-bottom:1px solid #ccc;
margin: 10px -40px;
margin-bottom: 30px;
}
#login{
width:300px;
float: left;
border-radius: 10px;
border: 2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 70px;
}
input[type=text],input[type=email]{
width:99.5%;
padding: 10px;
margin-top: 8px;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}
input[type=text],input[type=password]{
width:99%;
padding: 10px;
margin-top: 7px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
margin-bottom:15px;
}
input[type=submit]{
width: 100%;
background-color:#6a097d;
color: white;
padding: 10px;
font-size:23px;
cursor:pointer;

margin-bottom: -12px;
}
#formget{
float:right;
}
h1 {
margin-left: -85px;
}
table{
	padding:150px;
}
th, td {
  border: 1px solid black;
  padding: 10px;
  border-spacing: 2px;
  font-family: 'Raleway', sans-serif;
}
#img{
	height: 500px;
	width:500px;
}

body{
   background-color:#fff8cd;
}
</style>
</head>
<body>

<div id="main">
<h1>Registration Portal</h1>
<div id="login">
<h2>Form</h2>
<hr/>
<form name = "form1" action="list.php" method = "post" enctype = "multipart/form-data" >
            <div class = "container">
            <div class = "form_group">
                    <label>Id:</label>
                    <input type = "text" name = "id" value = "" required/>
                </div>
                <div class = "form_group">
                    <label>First Name:</label>
                    <input type = "text" name = "fname" value = "" required/>
                </div>
                <div class = "form_group">
                    <label>Middle Name:</label>
                    <input type = "text" name = "mname" value = "" required />
                </div>
                <div class = "form_group">
                    <label>Last Name:</label>
                    <input type = "text" name = "lname" value = "" required/>
                </div>
                <div class = "form_group">
                    <label>Phone No.:</label>
                    <input type = "text" name = "Phone" value = "" required/>
                </div>
                 <div class = "form_group">
                    <label>Email:</label>
                    <input type = "email" name = "email" value = "" required/>
                </div>
                <div class = "form_group">
                    <label>Password:</label>
                    <input type = "password" name = "pwd" value = "" required/>
                </div>
                <input type="submit" name="save" value="submit">
            </div>
        </form>
</div>

<div id="formget">
<a href=# ><img src="img.jpg" id="img" alt=""/></a>
</div>
</div>
