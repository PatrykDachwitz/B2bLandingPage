<li class="nav-item menu__option--flag dropdown {{ $class ?? '' }}">
    <a class="nav-link dropdown-toggle text-white text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <picture>
            <source srcset="/files/flags/{{ \Illuminate\Support\Facades\App::getLocale() ?? config('language.defaultLanguage') }}.webp" type="image/webp">
            <img width="40" src="/files/flags/{{ \Illuminate\Support\Facades\App::getLocale() ?? config('language.defaultLanguage') }}.jpg" alt="pl" loading="lazy">
        </picture>
    </a>
    <ul class="dropdown-menu menu__flags">

        <form action="{{ route('changeLanguage') }}" method="POST">
            @csrf
        @foreach(
    config('language.availableLanguage')
    as $country)
            <li>
                <button name="country" value="{{ $country }}" class="dropdown-item text-white text-uppercase" href="{{ \App\Facades\PathUrl::getModificationCurrentPath($country) }}">
                    <picture>
                        <source srcset="/files/flags/{{ $country }}.webp" type="image/webp">
                        <img width="40" src="/files/flags/{{ $country }}.jpg" alt="{{ $country }}" loading="lazy">
                    </picture>
                    {{ $country }}
                </button>
            </li>
        @endforeach
        </form>
    </ul>
</li>
