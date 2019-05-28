<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>POST DB</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- link css -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- link js -->
        <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>


    </head>

    <body>
      <div class="wrapper">

        <header>


        </header>
        @yield('content')
        {{-- @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      @if (session('success'))
       <div class="alert alert-success">
         <div class="container">
           {{session('success')}}
         </div>
       </div>

      @endif --}}

        <footer>

        </footer>
      </div>
    </body>

    </html>
