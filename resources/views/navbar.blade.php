<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<header>

    <img class="hamburger" src="/images/hamburger.png" alt="MENU">

    <a href="{{ route('index') }}"><img class="logo_img" src="/images/ecobonus-logo-1.svg" alt="Logo"></a>
    
    <nav>

        <?php function activeMenu($url)
        {
            return request()->is($url) ? 'active_section' : '';
        }
        ?>

        <ul>
            <img class="close_menu" src="/images/X.png" alt="CLOSE">
            <li class="hide_please"><a style="width:100%;" href="{{ route('index') }}"><img class="logo_img_min" src="/images/ecobonus-logo-1.svg" alt="Logo"></a></li>
            <a href="{{ route('index') }}"><img class="logo_img_fake" src="/images/ecobonus-logo-1.svg" alt="Logo"></a>
            <li class="{{ activeMenu('/') }}"><a href="{{ route('index') }}">HOME</a></li>
            <li class="{{ activeMenu('about') }}"><a href="{{ route('about') }}">THE ACTION</a></li>
            <li><a href="../#partners">PARTNERS</a></li>
            <li class="{{ activeMenu('downloads') }}"><a href="{{ route('downloads') }}">DOWNLOADS</a></li>
            {{-- <li class="{{ activeMenu('calendar') }}"><a href="{{ route('calendar') }}">EVENTS</a></li> --}}
            <li><a href="#contact">CONTACT</a></li>
        </ul>

    </nav>

</header>


<script>

    $('.hamburger').click(function(){
        $('nav').animate({
            right: '0'
        });
    });

    $('.close_menu').click(function(){
        $('nav').animate({
            right: '-100%'
        });
    });

</script>