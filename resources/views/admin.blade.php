<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NACOSS</title>

   <link href="{{asset('css/app.css')}}" rel="stylesheet">
   <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/vote.css')}}" rel="stylesheet">
 

</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">NACOSS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">ABOUT <span class="sr-only">(current)</span></a></li>
        <li><a href="#">EVENT</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACT <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">SOCIALS HERE</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="container">
    
    <div class="row">
        <div class="col-xs-12">


        <div class="col-xs-12 col-lg-4">
                    <a href="/site/0/working">
                        <button class="btn-lg btn-default">CLOSE VOTE</button>
                    </a>
             </div>

            <div class="col-xs-12 col-lg-4 ">
                <a href="/site/1/working">
                    <button class="btn-lg btn-primary">START VOTE</button>
                </a>
            </div>
            
         
            
              <div class="col-xs-12 col-lg-4">
                    <a href="/site/2/working">
                        <button class="btn-lg btn-danger">SHOW RESULT</button>
                    </a>
                </div>

                <br>
                <br>
                <form action="/damara" method="get" class="text-center form">
              
                                <h3 class="text-center"> generate pin</h3>
                             
                                <div class="form-group">
                                <label for="name">YOUR PIN</label>
                                <input type="text" class="form-control" value="{{$pin}} "  name="pin">
                                <small id="namehelp" class="form-text text-muted"></small> 
                            </div>
                     
                    
                            <button type="submit" class="btn btn-primary">generate pin</button> <br>  
                          
                  
                  </form>
            <br>
            <br>
            <br>


                @foreach($all as $i)
                    <div class="col-xs-12 barr" style="margin-bottom:70px;">
                            <div class="col-xs-6 bar1 text-center">
                                <!-- <img src=" {{asset('storage/' .$i->img)}} " class="voteimg" alt=""> -->
                            {{$i->name}}
                            <br>
                            {{$i->post }}
                            </div> 
                            <div class="col-xs-6 text-center ">
                              <h4> {{$i->vote}} </h4>
          
                            </div>
                    </div>
        @endforeach
        </div>
    </div>

 </div>

   
    </body>
</html>
