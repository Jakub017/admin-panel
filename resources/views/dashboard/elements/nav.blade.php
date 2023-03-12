<nav>
    <div class="breadcrumbs">
        Link 1 > Link 2
    </div>
    <div class="user-info">
        <img src="{{asset('img/recycle.jpg')}}" alt="" class="user-avatar">
        <div class="user-credentials">
            <span class="user-name">{{Auth::user()->name}}</span><br>
            <span class="user-email">{{Auth::user()->email}}</span>
        </div>
    </div>
</nav>
