<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>@yield('title')</title>

        <nav class="navbar navbar-inverse">
           <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="/">CompareME</a>
             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                 <li><a href="">Phone</a></li>
                 <li><a href="">Laptop</a></li>
                 <li><a href="">Tablet</a></li>
                 <li><a href="">Smart Watch</a></li>
               </ul>
               <form class="navbar-form navbar-left">
                 <div class="form-group">
                   <input type="text" class="form-control" placeholder="Search">
                 </div>
                <button type="submit" class="btn btn-default">Submit</button>
               </form>
               <ul class="nav navbar-nav navbar-right">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
               <ul class="nav navbar-nav">
                 @if (Auth::guest())
                     <li><a href="/login">Login</a></li>
                     <li><a href="/register">Register</a></li>
                    @else
                        <li><a href="#">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a></li>
                        <li><a href="{{ route('signout') }}">(Logout)</a></li>
                      @endif
                 </ul>
               </ul>
             </div><!-- /.navbar-collapse -->
           </div><!-- /.container-fluid -->
        </nav>

    </head>
    <body>
       @yield('body')
    </body>
</html>