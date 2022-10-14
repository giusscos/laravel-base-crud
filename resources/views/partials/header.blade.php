<header>
    <div class="banner_header">
        <span class="uppercase"> 
            dc power visa&reg;
        </span>
        <select class="uppercase">
            <option disabled selected>additional dc sites</option>
            <option>bho</option>
        </select>
    </div>
    <div class="container">
        <div class="logo_wrapper">
            <a href="{{ route('home') }}"></a>
            <img src="{{@asset('./img/dc-logo.png')}}" alt="logo-dc" />
        </div>
        <nav class="main_nav">
            @include('partials.header_list')
        </nav>
    </div>
</header>
