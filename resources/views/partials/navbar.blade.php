<nav class=" nav">
             
    <div class="navigation " id="navbar">
        <a href="{{ url('/') }}" class="logo"><svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 221.6 43.9" xml:space="preserve"><style>.st0{fill:none;stroke:#3a3a3a;stroke-miterlimit:10}</style><g id="Ebene_1-2"><path class="st0" d="M13.5 12.2l31.2-.3v28.3H12.4V13.3c0-.6.5-1.1 1.1-1.1z"/><path d="M31.9 39.9l-6.5.1V12.3l6.4-.1v27.7h.1zM26.7.6L2 21.4 6 26 30.7 5.3l-4-4.7z" fill="#3a3a3a" stroke="#3a3a3a" stroke-miterlimit="10"/><path class="st0" d="M14.4 11s-4.2-5.9-8.8-1.7 2.7 8.2 8.8 1.7z"/><path class="st0" d="M14.4 11S8.7 6.3 14 2.2s7.2 4.7.4 8.8z"/><text transform="matrix(.88 0 0 1 44.7 40.2)" font-size="30" font-family="OpenSans" fill="#3a3a3a">Hochzeitskiste</text></g></svg></a>
        <ul id="top" class=" navbar-nav">
            <li class="nav_content"><a  href="{{ route('checklist.index') }}">Checkliste</a></li>
            <li class="nav_content"><a  href="/budget">Budget</a></li>
            <li class="nav_content"><a href="/inspirationen">Inspiriation</a></li>
            <li class="nav_content"><a href="/blogs">Blog's</a></li>
            <li class="menu">
                <a href="" id="burger" class="burger"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.3 26.9"><path d="M28.2 11.9h-27c-.7 0-1.2.7-1.2 1.6 0 .8.5 1.5 1.2 1.5h26.9c.7 0 1.2-.7 1.2-1.6 0-.8-.5-1.5-1.1-1.5zm0-11.9h-27C.5 0 0 .7 0 1.6s.5 1.6 1.2 1.6h26.9c.7 0 1.2-.7 1.2-1.6S28.8 0 28.2 0zm0 23.8h-27c-.7 0-1.2.7-1.2 1.6 0 .9.5 1.6 1.2 1.6h26.9c.7 0 1.2-.7 1.2-1.6 0-.9-.5-1.6-1.1-1.6z"/></svg></a>
            </li>
        </ul>
        <div class="mobile-container">
            <ul class="nav-mobile">
                <a href="{{ url('/') }}" class="logo mobile-content"><svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 221.6 43.9" xml:space="preserve"><style>.st0{fill:none;stroke:#3a3a3a;stroke-miterlimit:10}</style><g id="Ebene_1-2"><path class="st0" d="M13.5 12.2l31.2-.3v28.3H12.4V13.3c0-.6.5-1.1 1.1-1.1z"/><path d="M31.9 39.9l-6.5.1V12.3l6.4-.1v27.7h.1zM26.7.6L2 21.4 6 26 30.7 5.3l-4-4.7z" fill="#3a3a3a" stroke="#3a3a3a" stroke-miterlimit="10"/><path class="st0" d="M14.4 11s-4.2-5.9-8.8-1.7 2.7 8.2 8.8 1.7z"/><path class="st0" d="M14.4 11S8.7 6.3 14 2.2s7.2 4.7.4 8.8z"/><text transform="matrix(.88 0 0 1 44.7 40.2)" font-size="30" font-family="OpenSans" fill="#3a3a3a">Hochzeitskiste</text></g></svg></a>
                <li class="mobile-content"><a  href="{{ route('checklist.index') }}">Checkliste</a></li>
                <li class="mobile-content"><a  href="/budget">Budget</a></li>
                <li class="mobile-content"><a href="/inspiriation">Inspiriation</a></li>
                <li class="mobile-content"><a href="/blogs">Blog's</a></li>
            </ul>
        </div>
        <ul class="navbar-nav">
            @if(auth()->check())
                <li class="nav_content">
                    <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                    @if (auth()->user()->is_admin === 1)
                    <a class="nav-link" href="{{ route('admin.index')}}">Dashboard</a> 
                    @endif
                </li>
                <li class="nav_content">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                </li>

            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none">
            @csrf
            </form>
            @else
                <li class="nav_content">
                    <a class="nav-link" href="{{ route('register') }}">Registrieren</a>
                </li>
                <li class="nav_content">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
