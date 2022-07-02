<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apni-Shop ecommerce</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
  .custom-login{
    height:500px;
    padding-top:100px;
  }
  img.slider-img{
    height:400px !important
  }
  .custom-product{
   height:600px
  }
  .d-flex{
    margin-top:10px; 
  }
  /* .slider-text{
    background-color: #abb3ab85 !important;
    opacity:3;
    color: rgb(155, 165, 164);
  } */
  .trending-image{
    height: 100px;
  }
  .trending-image:hover{
    transform: scale(1.1);
  }
  .trending-item{
    float: left;
    width:20%;
  }
  .trending-wrapper{
    margin: 30px;
  }
  
  .header-text{
    text-align: center;
    align-content: center;
    padding: 10px;
  }
  .detial-img{
    height: 280px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }
  .login{
    float: right;
  }
    .search-box{
        width: 500px !important
    }
  .cart-list-devider{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-bottom: 1px solid #ccc; 
    margin-bottom: 20px;
    padding-bottom: 20px; 
  }
  .panel-default{
  left: 0;
  bottom: 0;
  width: 100%;
  color: rgb(14, 12, 12);
  text-align: center;
  background: linear-gradient(to right, #f8f6f7, #f3f0ec);
    }
    
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  padding: 10px;
  display: flex;
  flex-direction: column-reverse;
}
.card-text{
  color: gray
}
.card-text:hover{
  color: rgb(61, 109, 192)
}
a:link {
  text-decoration: none;
}
#demo{
  font-size: 30px;
  color: rgb(10, 10, 10);
}
.cart-text{
text-align: center;
font-size: 30px;
padding: 10px;
font-weight: 400;
}
.removecart-text{
margin-top:50px;
}
/* 
@media (max-width:575px) {
	.card{
		max-width:100%;
    display: block;
	}
}
@media (max-width:767px) {
	.card{
		max-width:100%;
     display: block;

	}
} */
  </style>
</html>



<script>
var countDownDate = new Date("Jul 03, 2022 15:37:25").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  document.getElementById("demo").innerHTML = hours + ":"
  + minutes + ":" + seconds ;
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

