<header class="d-flex justify-content-between align-items-center ps-5 pe-5">
    <div>
        <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
        <span><strong>SECTION MOVIE</strong></span>
    </div>
    <ul class="d-flex justify-content-center align-items-center gap-3">
        {{-- request --> per assegnare un eventuale classe css "active" alla link della pagina selezionata route('alias') -> per essere likati alla pagina home --}}
        <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ Request::route()->getName() === 'bestseller' ? 'active' : '' }}"><a href="{{ route('bestseller') }}">Best Seller</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</header>