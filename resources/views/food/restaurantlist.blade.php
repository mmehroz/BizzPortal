<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Portal</title>
    <link rel="icon" href="https://bizzworldcommunications.com/public/images/favicon.png" type="image/gif" sizes="16x16">
    <!-- <link rel="stylesheet" href="{!! asset('public/assets/css/food.css') !!}" /> -->
    <link rel="stylesheet" href="{!! asset('public/bizzmain/cdns/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/bizzmain/fontawsm/fontawesome-free-5.15.3-web/css/fontawesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('public/bizzmain/fontawsm/fontawesome-free-5.15.3-web/css/all.min.css') !!}">
    <script src="{!! asset('public/bizzmain/cdns/jquery.min.js') !!}"></script>
    <script src="{!! asset('public/bizzmain/cdns/bootstrap.min.js') !!}"></script>
</head>
<style>
    .navbar .fa-cart-arrow-down {
        font-size: 1.5rem;
        color: #ffffff;
    }
    
    nav {
       
        background: linear-gradient(133.03deg, #101D3B 3.21%, #97172D 100%);
    }
    
    nav a {
        color: #ffffff;
        font-weight: 600;
    }
    
    nav a:hover {
        color: #ffffff;
    }
    .main-drop .user-img img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-top: -10px;
    }
    
    .banner {
        margin-top: 100px;
    }
    
    .banner h1 {
        font-size: 3.4rem;
        color: #000000;
        padding-top: 50px;
        line-height: 4.3rem;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 600;
        text-transform: capitalize;
    }
    
    .banner .sub-h {
        font-size: 3.3rem;
    }
    
    .banner p {
        font-size: 1.1rem;
        color: #b4b4b4;
        line-height: 1.5rem;
        text-align: justify;
        padding-top: 1.5rem;
    }
    
    .banner .button {
        width: 250px;
        height: 60px;
        font-size: 1.2rem;
        background-color: #97172D;
        color: white;
        border: 1px solid #97172D;
        border-radius: 26px;
        padding-bottom: 5px;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-weight: 500;
        margin-top: 30px;
    }
    
    .banner input {
        width: 100%;
        height: 80px;
        border: 1px solid lightgray;
        border-radius: 5px;
        outline: none;
        padding-left: 5px;
    }
    
    .banner input::placeholder {
        font-size: 17px;
    }
    
    .rest {
        margin-top: 70px;
    }
    
    .rest .fr {
        color: #0c4aaf;
    }
    
    .rest h1 {
        color: #000000;
        font-size: 2rem;
        text-transform: capitalize;
    }
    
    .rest .as {
        font-size: 1.5rem;
        font-weight: 600;
        color: #9A192E;
        text-decoration: none;
    }
    
    .rest img {
        border: 1px solid transparent;
        border-radius: 30px;
        /* pointer: cursor; */
        cursor: pointer;
    }
    
    .rest .fa-pencil-alt,
    .fa-trash-alt {
        color: #9A192E;
    }
    
    .rest h5 {
        color: #000000;
    }
    
    .footer {
        color: white;
        background: #101D3B;
        font-size: 1.1rem;
        font-weight: 600;
        width: 100%;
    }
    @media only screen and (max-width: 1000px) {
        .des {
            font-size: 14px;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 300) {
                $(".navbar").css("background", "linear-gradient(133.03deg, #101D3B 3.21%, #97172D 100%)");
            } else {
                $(".navbar").css("background", "");
            }
        })
    })
</script>
<body>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg fixed-top">
                        <a class="navbar-brand"><img src="{{URL::to('public/assets/img/logo_white_header.svg')}}" alt="" width="250px"></a>
                        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="my-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto  text-right pr-5">
                            
                                <li class="nav-item dropdown has-arrow main-drop">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <span class="user-img">
                                <img src="{{URL::to('public/img/')}}/{{session()->get("image")}}" alt="">
                                        <span class="status online"></span></span>
                                        <span>{{session()->get("name")}}</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" style="color: black;" href="#" onclick="return viewprofile({{session()->get(" id ")}});"><i class="fa fa-user" style="padding-right: 7px; font-size: 12px; color: #97172D;"></i>My Profile</a>
                                        <a class="dropdown-item" style="color: black;" href="{{url('/')}}"><i class="fa fa-power-off" style="padding-right: 7px;  font-size: 12px; color: #97172D;"></i>Logout</a>
                                        <a class="dropdown-item" style="color: black;" href="{{url('/chapass')}}"><i class="fa fa-key" style="padding-right: 7px; font-size: 12px; color: #97172D;"></i>Change Password</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#" onclick="userorderlist()"><i class="fa fa-shopping-cart" style="color: #ffffff;"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </section>
    <!-- banner -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Online food ordering<br><span class="sub-h"> portal system</span></h1>
                    <p>
                        One of the very nicest things about life is the way we must regularly stop whatever it is we are doing and devote our attention to eating.
                    </p>
                    <div class="input-group pt-3">
                        <input type="text" class="" id="myInput" placeholder="Search your Food">
                        <div class="input-group-append">
                           <!--  <button class="button" type="button">
                             <i class="fa fa-search"></i> SEARCH
                          </button> -->
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <img src="{{URL::to('public/restaurant/12345.png')}}" alt="" width="100%">
                </div>
                @if(session('message'))
                <div><p class="alert alert-success" >{{session('message')}}</p> </div>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <div><h4><li>{{ $error }}</li></h4> </div>
                  @endforeach
                </ul>
              </div>
              @endif
            </div>
        </div>
    </section>
    <!-- Restaurant -->
    <section class="rest">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h5 class="fr">Food Receipe</h5>
                    <h1>with delicious food</h1>
                </div>
                <div class="col-6 pt-5 text-right">
                    @if(session()->get("role") <= 2)
                    <a  onclick="addrestaurant()" class="as">
                        <i class="fas fa-plus-circle"></i> Add Restaurant
                    </a>
                    @endif
                </div>
                @foreach ($data as $val)
                <div class="col-4 pt-5" id="restaurant">
                    <span>
                    <a onclick="productlist({{$val->restaurant_id }})"> <img src="{{URL::to('public/restaurant/')}}/{{$val->restaurant_picture}}" alt="" width="100%"></a>
                    <div class="row">
                        <div class="col-6 pt-3">
                            <h5>{{$val->restaurant_name}}</h5>
                        </div>
                        @if(session()->get("role") <= 2)
                        <div class="col-6 text-right pt-3">
                            <a href="#" onclick="editrestaurant({{$val->restaurant_id }})> <i class="fas fa-pencil-alt"></i></a> <strong>/</strong>
                            <a href="{{url('/deleterestaurant')}}/{{$val->restaurant_id }}"> <i class="fas fa-trash-alt"></i></a>
                        </div>
                        @endif
                        <div class="col-12">
                            <p class="des pt-1">
                                {{$val->restaurant_otherdetails}}
                            </p>
                        </div>
                    </div>
                    </span>
                </div>
                @endforeach
                
            </div>
        </div>
         <div id ='modals'></div>
    </section>
    <section class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-1 pt-1">
                    © 2021 Copyright: Bizz Portal All Rights Reserved
                </div>
            </div>
        </div>

    </section>
    <script type="text/javascript">
        $(document).ready(function(){
             $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#restaurant span").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        function addrestaurant(){
        	$.get('{{ URL::to("/addrestaurantmodal")}}',function(data){
            $('#modals').empty().append(data);
            $('#addrestaurant').modal('show');
            });
        }
        function editrestaurant($id){
            $.get('{{ URL::to("/editrestaurantmodal")}}/'+$id,function(data){
            $('#modals').empty().append(data);
            $('#editrestaurant').modal('show');
            });
        }
        function productlist($id){
            window.location.replace('{{ URL::to("/productlist")}}/'+$id);
        }
        function userorderlist($id){
            $.get('{{ URL::to("/userorderlist")}}',function(data){
            $('#modals').empty().append(data);
            $('#userorderlist').modal('show');
            });
        }
        </script>
</body>
</html>