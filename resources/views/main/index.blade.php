<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @include('include.style')

</head>

<body>
    <div id="app">
        @include('include.sidebar')
        <div id="main">
            <nav class="navbar navbar-expand-lg mx-auto bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Classroom</a>
                  <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      <div class="nav-item avatar avatar-lg">
                        <a class="nav-link" href="#"><img src="{{'source/assets/images/faces/5.jpg'}}" alt=""></a>
                      </div>
                    </ul>
                  </div>
                </div>
              </nav>
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Dashboard Admin</h3>
            </div>
            
            @yield('content')

            @include('include.footer')
        </div>
    </div>
    
    @include('include.script')
</body>

</html>