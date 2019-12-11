<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List Barang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/login.css'?>">
	
</head>
<body>
    <div id="login-button">
         <img src="assets/img/login.png"></img>
    </div>
    <div id="container">
         <h1>Log In</h1>
         <span class="close-btn">
            <img src="asset/img/close.png"></img>
        </span>
    </div>

<div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Masuk</h3>
            </div>

            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIM</label>
                        <div class="col-xs-9">
                            <input name="nim" id="NIM" class="form-control" type="text" placeholder="NIM" style="width:335px;" required>
                        </div>
                    </div>

                 <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-9">
                            <input name="email" id="mail" class="form-control" type="email" placeholder="Nama " style="width:335px;" required>
                        </div>
                    </div>

                <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" id="pass" class="form-control" type="passsword" placeholder="password" style="width:335px;" required>
                        </div>
                    </div>
                <div id="remember-container">
                    <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
                     <span id="remember">Remember me</span>
                     <span id="forgotten">Forgotten password</span>
                </div>
                </form>
</div>
</body>
</html>            

