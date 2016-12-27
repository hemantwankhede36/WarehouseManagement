<?php ?>
<html>
<head>
<style>
 body {
        
        font: 14px 'Lucida sans', Arial, Helvetica;
        color: #eee;
        text-align: center;
    }
    
    a {
        color: #ccc;
    }
 
    .cf:before, .cf:after{
      content:"";
      display:table;
    }
    
    .cf:after{
      clear:both;
    }

    .cf{
      zoom:1;
    }
    .form-wrapper {
        width: 450px;
        padding: 15px;
        margin: 200px auto 5px auto;
        background: #2196F3;
        background: rgba(0,.2,2,.1);
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
    }
    .form-wrapper input {
        width: 330px;
        height: 40px;
        padding: 10px 5px;
        float: left;    
        font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
        border: 0;
        background: #fff;
        -moz-border-radius: 3px 0 0 3px;
        -webkit-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px;      
    }
    .form-wrapper input:focus {
        outline: 0;
        background: #fff;
        -moz-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        -webkit-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
    }
    .form-wrapper input::-webkit-input-placeholder {
       color: #999;
       font-weight: normal;
       font-style: normal;
    }
    .form-wrapper input:-moz-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }
    .form-wrapper input:-ms-input-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }       
    .form-wrapper button {
        overflow: visible;
        position: relative;
        float: right;
        border: 0;
        padding: 0;
        cursor: pointer;
        height: 40px;
        width: 110px;
        font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
        color: #ffff;
        text-transform: uppercase;
        background: #2921c9;
        -moz-border-radius: 0 5px 5px 0;
        -webkit-border-radius: 0 5px 5px 0;
        border-radius: 0 3px 3px 0;      
        text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
    }         
.form-wrapper button:hover{		
        background: #e54040;
}	      
    .form-wrapper button:active,
    .form-wrapper button:focus{   
        background: #c42f2f;    
}
    .form-wrapper button:before {      
}   
    .form-wrapper button:hover:before{
        border-right-color: #2921c9;
}    
.form-wrapper button:focus:before{
        border-right-color: #c42f2f;
}        
.form-wrapper button::-moz-focus-inner {
        border: 0;
        padding: 0;
}
.logout{
   color:#d83c3c;
   position:fixed;
   right:10px;
   top:10px;
}
.byline p{
  text-align:center;
  color:#f00;
  font: bold 28px Arial, Helvetica, Sans-serif; 
}
.byline p a{
  color:#d83c3c;
  text-decoration:none;
}
.button{
padding-top: 30px;
}
</style>
</head>
<body>
<div class="logout">
<form method="get" action="http://localhost/dashboard/Project/logout.php"><button type="submit">Logout</button></form>        
</div>
<!--<form class="form-wrapper cf" method="get" action="http://localhost/dashboard/Project/search.php" > <input type="text" placeholder="Search here..." required>  	
<form method="get" action="http://localhost/dashboard/Project/search.php"><button type="submit">Search</button></form>
</form>-->
<br><br><br>
<div class="byline"><p>Welcome To WareHouse Management System</p>
</div>
<div class="button" width="200" height="50">
<form method="get"  action="http://localhost/dashboard/Project/display.html"><button  type="submit">Display</button></form>
<form method="get"  action="http://localhost/dashboard/Project/add.html"><button  type="submit">Add Customer</button></form>
<form method="get"  action="http://localhost/dashboard/Project/delete.html"><button  type="submit">Remove Customer</button></form>
<!--<form method="get"  action="http://localhost/dashboard/Project/update.html"><button  type="submit">Update Customer</button></form>-->
</div>
	</body>
	</html>