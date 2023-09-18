<div class="profile-dropdown" id="profDropdown">
    @if(Auth::user()->role === 'admin')
        <a href="/admin">Адмін-панель</a>
    @endif
    <a href="/profile">Особистий кабінет</a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            Вихід
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
</div>
