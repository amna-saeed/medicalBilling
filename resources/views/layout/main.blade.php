<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    {{-- <div class="se-pre-con">
        <div class="loader"></div>
    </div> --}}

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    @include('layout.js')
</body>

</html>


