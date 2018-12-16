<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','My Laravel')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
        .is-complete{
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <div class="navbar-item">
                :: NLSN ::.
            </div>
        </div>
            
        <div id="navbarBasic" class="navbar-menu">
            <div class="navbar-start">
                <a href="/" class="navbar-item">
                    Home
                </a>
                <a href="/about" class="navbar-item">
                    About
                </a>
                <a href="/contact" class="navbar-item">
                    Contact
                </a>
            </div>
            <div class="navbar-end">
                <a href="/login" class="navbar-item">
                    <strong>Admin</strong>
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
