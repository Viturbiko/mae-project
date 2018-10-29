<nav>

    <?php function activeMenu($url)
    {
        return request()->is($url) ? 'active_section' : '';
    }
    ?>

    <div class="toggle_navbar">
        <i class="fas fa-bars menu" aria hidden="true"></i>
    </div>
    <ul>
        <a href="{{ route('index') }}"><img src="/images/med-atlantic-logo.svg" alt="Logo"></a>
        <li class="{{ activeMenu('/') }}"><a href="{{ route('index') }}">HOME</a></li>
        <li class="{{ activeMenu('about') }}"><a href="{{ route('about') }}">THE PROJECT</a></li>
        <li><a href="#partners">PARTNERS</a></li>
        <li class="{{ activeMenu('downloads') }}"><a href="{{ route('downloads') }}">DOWNLOADS</a></li>
        <li class="{{ activeMenu('calendar') }}"><a href="{{ route('calendar') }}">EVENTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
    </ul>
</nav>