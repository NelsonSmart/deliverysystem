<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
	<title>Order Shipped</title>
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
                Your package just shipped! Please click the button below to track your package.
                <br>
                <br>
               <a href="{{env('APP_URL')}}/trace/track?trackNumber={{$details['trackNumber']}}" style="border: solid green 1px; border-radius:3px; padding:2px;">Track Order</a>
                
                <br>
                <br>
                Thanks for choosing our company {{$details['companyName']}}
        	</p>
        	<p>
        		Team <a href="{{env('APP_URL')}}"><i class="fa fa-certificate"></i>{{env('APP_NAME')}}. </a>
        	</p>
        </div>
    </div>
	
</body>
</html>