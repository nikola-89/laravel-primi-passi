@include('partials._header')
<div class="container">
    <header>
        <div class="wrapper">
            <div class="navbar">
                <div class="logo">
                    <img src="https://i.imgur.com/1Yn1xQ6.png" alt="logo"/>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
</div>
@include('partials._footer')