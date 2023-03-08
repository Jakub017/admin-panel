<div class="sidebar">
    <div class="logo-container">
        <img src="" alt="" class="logo">
    </div>
    <div class="menu-group">
        <h3 class="menu-group-name">Start</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="#" class="menu-link active">
                    <img src="{{asset('img/dashboard-icon.png')}}" alt="">Pulpit
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('dashboard.users')}}" class="menu-link"><img src="{{asset('img/users-icon.png')}}"
                        alt="">Użytkownicy</a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link"><img src="{{asset('img/settings-icon.png')}}" alt="">Ustawienia</a>
            </li>
        </ul>
    </div>
    <div class="menu-group">
        <h3 class="menu-group-name">Zarządzanie witryną</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="{{route('dashboard.clients')}}" class="menu-link">Klienci</a>
                <a href="#" class="menu-link">Wpisy</a>
                <a href="{{route('dashboard.services')}}" class="menu-link">Usługi</a>
            </li>
        </ul>
    </div>
</div>
