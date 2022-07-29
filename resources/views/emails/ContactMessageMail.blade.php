<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
	<title>Order Delivered</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:5%; ">
            <div align="">
        		<img src="{{env('APP_URL')}}/assets/images/logo/logo-dark.png" style="width:134px; height:43px;" align="center">
        	</div>
        	<h3 align="">Hi {{$details['name']}}, </h3>
        	<p>
                Thanks for contacting us and  choosing our company {{$details['companyName']}} , will get back to you.
                <br>
                <br>
               We hope you enjoy your purchase. Have a nice day!
        	</p>
        	<p>
        		Team <a href="{{env('APP_URL')}}"><i class="fa fa-certificate"></i>{{env('APP_NAME')}}. </a>
        	</p>
        </div>
    </div>
	
</body>
</html>