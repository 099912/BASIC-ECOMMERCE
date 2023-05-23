<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom-Project</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext');
   .nav-bar{
    height: 10%;
   }
    
    .login-ecom{
        heigth: 200px;
        padding-top:100px
       /* text-align:center; */

    }
img.slider-img{
        height: 300px !important
    }
/* .panel-heading{
    height: 40px;
} */
    .custom-product{
        height:300px;
    }
    .panel-default{
        background-color:black;
        color:white;
        
    }
    .btn-search{
        background-color: #FFA500;
    }
    .search-box{
        width:100%;
    }
    .slider-text{
        background-color:black;
    }
    
    .trending-img{
        height:150px;
    }
    
    .trending-item{
        float:left;
        width:33%;
        padding-bottom:10px;
    }
    .t-d{
        margin:20px;
        margin-bottom=20px;
    }
    
    .trending-wrapper{
        margin:20px;
        /* margin-bottom:60px; */
    }
    .detail-pic{
        height: 400px;
        width:100%;
       
    }
 
 .emm{
width:700px;
border: 2px solid #aaa;
font-size: 18px;
 }
 .pass{
    width:700px;
    font-size: 18px;
    border: 2px solid #aaa;
 }
 /* .head{
    margin:30px;
    font-weight: bold;
    text-indent: 20px;
    font-family: 'Arial';
    font-size:40px;

 } */
 
 .le{
font-size:30px;

 }
 .pe{
    font-size:30px;
    
 }
 .cart-list-devider{
    border-bottom:1px solid #cccc;
    margin-bottom:20px;
    padding-bottom:20px;

 }
 .cart-p{
    margin-bottom:20px;
    font-weight: bold;
 }
 .custom-order{
    font-size:20px;
}
.order-pg{
    margin:20px;
    margin-bottom:20px;
    /* padding-bottom:10px; */
    font-weight: bold;
}




    
</style>

</head>
<body>
    <!-- these are portions in which we make header view
     content is a portion which we declare in html form and footer 
     is same as header
     it to them using jquery -->
   {{View::make("header")}}
   @yield('content') 
   {{View::make('footer')}}
    
</body>
<!--it is use to check wheter the jquery is running <script>
    $(document).ready(function(){
        $("button").click(function(){
            alert("All Set")
        })
    })
    </script> -->
</html>