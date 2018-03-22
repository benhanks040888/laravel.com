<nav id="slide-menu" class="slide-menu" role="navigation">
    <div class="brand">
        <a href="/">
            <img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
        </a>
    </div>

    <ul class="slide-main-nav">
        @if (!empty($docs))
            <li><a href="/">Home</a></li>
        @endif
        @include('partials.main-nav')
    </ul>

    @if (!empty($docs))
        <div class="slide-docs-nav">
            <h2>Documentation</h2>
            {!! $index !!}
        </div>
    @endif
</nav>