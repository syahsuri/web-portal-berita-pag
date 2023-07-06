<!DOCTYPE html>
<html lang="en">

<head>
    @include('homepage.layouts.stylesheet')
</head>

<body>
    <div class="se-pre-con"></div>
    <header>
        @include('homepage.layouts.header')
    </header>

    <!-- header news Area ============================================ -->

    {{-- Highlight News --}}
    @yield('highlightsSections')
    {{-- /Highlight News --}}

    {{-- Contents --}}
    @yield('contents')
    {{-- /Contents  --}}

    <!-- Video News Area ============================================ -->
    {{-- Video --}}
    @yield('videosSections')
    {{-- /Video --}}

    {{-- Footer --}}
    @include('homepage.layouts.footer')
    {{-- Footer --}}

    {{-- Script --}}
    @include('homepage.layouts.script')
    {{-- /Script --}}

    @yield('script')

</body>

</html>
