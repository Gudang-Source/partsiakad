<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logounej.png"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="<?php echo URL; ?>public/css/Niceajahgan.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL; ?>public/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <title>SIAKAD B</title>

        <style>
            body{
                font-family:Verdana, Geneva, sans-serif;
                background-color:rgba(204,204,204,0.3);
                background-image:url(img/backgroun-login.png);            }

            .form-ribbon{  
                width:100%;
                height:100%;
                background-color:rgba(255,255,255,0);
                vertical-align:middle;
            }

            .form-control{
                border: 1px solid #FFF;
                margin:auto;
                height:100%;
            }

            .logo-scale-40{
                width:40%;
                height:auto;
                margin-bottom: 40px;
            }

            .form-group{
                margin:auto;
                margin-top:5px;
                margin-bottom:3px;
                padding-top:3px;
                padding-bottom:4px;
                width:100%;
            }

        </style>	
    </head>

    <body>
        <div class="container" style="padding-left:5px; padding-right:5px; width:98%">
            <div class="col-sm-12">
                <div class="container" style="background-color:rgba(255,255,255,0); width:25%; margin-top:100px">
                    <center>	
                        <img class="img-responsive logo-scale-40" src="img/logo unej.png" style="margin-top:15px; margin-bottom:15px"/>
                        <h4 style="color:#FFF; font-family:'Arial Black', Gadget, sans-serif; margin-bottom:0px"> Sistem Informasi Akademik</h5>
                        <h3 style="color:#FFF; font-family:'Arial Black', Gadget, sans-serif; margin-bottom:3px">UNIVERSITAS JEMBER</h4>
                        <h4 style="color:#FFF; font-family:'Arial Black', Gadget, sans-serif; margin-top:50px"> Selamat Datang </h4>
                    <div class="form-group">
                        <div class="form-group">
                            <form class="form-signin" action="<?php echo URL; ?>login/run" method="POST">
                                <input type="text" class="input-md form-control" placeholder="Username" style="width:60%" name="username" required/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="input-md form-control" placeholder="Password" style="width:60%" name="password" required/>
                        </div>
                         <button class="form-control btn btn-primary" type="submit" style="width:60%; margin-top:3px; background-color:rgba(51,51,51,0.7)">SIGN IN</button>
                        </form>
                        <br>
                        <div style="margin-top:10px">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"style="color:red"></span>
                                <span class="sr-only">Error:</span>
                                <span class="sp_center" style="color:red"><?php
                                    echo session::get('loginfail');
                                ?></span>
                        </div>
                    </div>
					</center>

                </div>

            </div>
    </body>
</html>
