@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Użytkownicy</h2>
<h4 class="section-subheading">Lista osób, które posiadają dostęp do panelu administracyjnego.</h4>
<div class="top-bar">
    <a href="#" class="add-button">Dodaj użytkownika +</a>
    <form action="#" class="search-form">
        <input class="search-input" type="text" placeholder="Szukaj...">
        <img src="{{asset('img/search-icon.png')}}" alt="" class="search-icon">
    </form>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Avatar</th>
                <th>Imię i nazwisko</th>
                <th>Adres email</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            <tr>
                <td><img class="avatar-photo" src="{{asset('img/recycle.jpg')}}" alt=""></td>
                <td>Jakub Lipiński</td>
                <td>j.lipinski017@gmail.com</td>
                <td>
                    <div class="actions">
                        <a class="see-record" href="#"><img src="{{asset('img/see-icon.png')}}" alt=""> Zobacz</a>
                        <a class="edit-record" href="#"><img src="{{asset('img/edit-icon.png')}}" alt=""> Edytuj</a>
                        <form action="#">
                            <button class="delete-record"><img src="{{asset('img/delete-icon.png')}}" alt="">
                                Usuń</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td><img class="avatar-photo" src="{{asset('img/recycle.jpg')}}" alt=""></td>
                <td>Jakub Lipiński</td>
                <td>j.lipinski017@gmail.com</td>
                <td>
                    <div class="actions">
                        <a class="see-record" href="#"><img src="{{asset('img/see-icon.png')}}" alt=""> Zobacz</a>
                        <a class="edit-record" href="#"><img src="{{asset('img/edit-icon.png')}}" alt=""> Edytuj</a>
                        <form action="#">
                            <button class="delete-record"><img src="{{asset('img/delete-icon.png')}}" alt="">
                                Usuń</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td><img class="avatar-photo" src="{{asset('img/recycle.jpg')}}" alt=""></td>
                <td>Jakub Lipiński</td>
                <td>j.lipinski017@gmail.com</td>
                <td>
                    <div class="actions">
                        <a class="see-record" href="#"><img src="{{asset('img/see-icon.png')}}" alt=""> Zobacz</a>
                        <a class="edit-record" href="#"><img src="{{asset('img/edit-icon.png')}}" alt=""> Edytuj</a>
                        <form action="#">
                            <button class="delete-record"><img src="{{asset('img/delete-icon.png')}}" alt="">
                                Usuń</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
