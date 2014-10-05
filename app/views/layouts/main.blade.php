<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kwizine Blog</title>
     {{ HTML::style('packages/bootstrap/css/bootstrap.min.css')}}
       {{ HTML::style('packages/bootstrap/js/bootstrap.min.js')}}
     {{ HTML::style('css/main.css')}}
  </head>

  <body>

    <nav role="navigation" class="navbar navbar-inverse">

        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">

            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar">login</span>

                <span class="icon-bar">register</span>


            </button>


        </div>

        <!-- Collection of nav links, forms, and other content for toggling -->

        <div id="navbarCollapse" class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                 @if(!Auth::check())
                 <li>{{ HTML::link('users/register', 'Register') }}</li>
                 <li>{{ HTML::link('users/login', 'Login') }}</li>
                   @else
                 <li>{{ HTML::link('users/logout', 'logout') }}</li>
                @endif
            </ul>

        </div>

    </nav>

     <!-- <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">
                    <li>{{ HTML::link('users/register', 'Register') }}</li>
                    <li>{{ HTML::link('users/login', 'Login') }}</li>
                </ul>
            </div>
        </div>
    </div> -->
    <div class="container">
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
    </div>

    {{ $content }}

  </body>
</html>