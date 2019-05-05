
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cashier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        td {
            white-space: nowrap; overflow: hidden; text-overflow:ellipsis;
        }
    </style>
  </head>
  <body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 500px;
width: 500px;
min-height: 100px;
margin: 175px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 17px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
<div class='popup'>
<div class='cnt223'>
<h3>Auto-UPMin says:</h3>
<p>
Student successfully loaded.
<br/>
<br/>
<a href='' class='close'><input type="submit" value="close" /></a>
</p>
</div>
</div>
      
      <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <form role="form" method="post" action="<?php echo base_url('cTransaction/addBalance'); ?>">
                    <fieldset>
                        <div class="form-group"  >
                           <input class="form-control" placeholder="Student Number" name="studentNumber" type="studentnumber" autofocus>
                        </div>
                       <div class="form-group">
                           <input class="form-control" placeholder="Amount" name="value" type="number" value="" step="10">
                       </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="LOAD" name="Load" onclick="this.disabled=true;this.form.submit();">
                       </form>
                    <a onclick="return confirm('Student loaded successfuly!');">My Link</a>
                    </fieldset>
                </div>
            </div>
        </div>
      </div>
      
  </body>
</html>
