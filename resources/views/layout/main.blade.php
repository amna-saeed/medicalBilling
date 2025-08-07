<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>

  <!-- Spinner Only Covers Loading -->
    <div class="me-loader" id="meLoader">
        <div class="loader spinner-border text-light" role="status">
           <span class="visually-hidden"> <img src="{{asset('assets/appImg/white.svg')}}"  /> </span>
        </div>
    </div>

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    @include('layout.js')

</body>

</html>
