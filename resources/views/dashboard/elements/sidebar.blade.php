<div class="sidebar">
    <div class="logo-container">
        <img src="" alt="" class="logo">
    </div>
    <div class="menu-group">
        <h3 class="menu-group-name">Start</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="{{route('dashboard.home')}}" class="menu-link active">
                    <img src="{{asset('img/menu-icons/dashboard-icon.png')}}" alt="">Pulpit
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('dashboard.users')}}" class="menu-link"><img
                        src="{{asset('img/menu-icons/users-icon.png')}}" alt="">Użytkownicy</a>
            </li>
        </ul>
    </div>
    <div class="menu-group">
        <h3 class="menu-group-name">Zarządzanie witryną</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="{{route('dashboard.clients')}}" class="menu-link"><img
                        src="{{asset('img/menu-icons/people-icon.png')}}" alt="">Klienci</a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link"><img src="{{asset('img/menu-icons/posts-icon.png')}}" alt="">Wpisy</a>
            </li>
            <li class="menu-item">
                <a href="{{route('dashboard.services')}}" class="menu-link"><img
                        src="{{asset('img/menu-icons/services-icon.png')}}" alt="">Usługi</a>
            </li>
        </ul>
    </div>
    <div class="menu-group">
        <h3 class="menu-group-name">Inne</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="#" class="menu-link"><img src="{{asset('img/menu-icons/settings-icon.png')}}"
                        alt="">Ustawienia</a>
            </li>
            <li class="menu-item">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="menu-link"><img src="{{asset('img/menu-icons/logout-icon.png')}}"
                            alt="">Wyloguj</button>
                </form>
            </li>
        </ul>
    </div>
</div>
