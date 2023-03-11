@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Klienci</h2>
<h4 class="section-subheading">Lista klientów, którzy zapisali się poprzez formularz.</h4>
<div class="top-bar">
    <a href="#" class="add-button">Dodaj klienta +</a>
    <form action="#" class="search-form">
        <input class="search-input" type="text" placeholder="Szukaj...">
        <img src="{{asset('img/actions-icons/search-icon.png')}}" alt="" class="search-icon">
    </form>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Imię i nazwisko</th>
                <th>Nazwa firmy</th>
                <th>Numer telefonu</th>
                <th>Adres email</th>
                <th>Grupy</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            <tr>
                <td>Jakub Lipiński</td>
                <td>FHU Marianex</td>
                <td>+48 731357634</td>
                <td>kontakt@lipinskijakub.pl</td>
                <td class="tags"><a class="tag" href="#">Sprzedający</a> <a class="tag" href="#">Newsletter</a></td>
                <td class="actions">
                    <a class="see-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Zobacz</a>
                    <a class="edit-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Edytuj</a>
                    <form action="#">
                        <button class="delete-record"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Usuń</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Jakub Lipiński</td>
                <td>FHU Marianex</td>
                <td>+48 731357634</td>
                <td>kontakt@lipinskijakub.pl</td>
                <td class="tags"><a class="tag" href="#">Sprzedający</a> <a class="tag" href="#">Newsletter</a></td>
                <td class="actions">
                    <a class="see-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Zobacz</a>
                    <a class="edit-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Edytuj</a>
                    <form action="#">
                        <button class="delete-record"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Usuń</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Jakub Lipiński</td>
                <td>FHU Marianex</td>
                <td>+48 731357634</td>
                <td>kontakt@lipinskijakub.pl</td>
                <td class="tags"><a class="tag" href="#">Sprzedający</a> <a class="tag" href="#">Newsletter</a></td>
                <td class="actions">
                    <a class="see-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Zobacz</a>
                    <a class="edit-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Edytuj</a>
                    <form action="#">
                        <button class="delete-record"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Usuń</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Jakub Lipiński</td>
                <td>FHU Marianex</td>
                <td>+48 731357634</td>
                <td>kontakt@lipinskijakub.pl</td>
                <td class="tags"><a class="tag" href="#">Sprzedający</a> <a class="tag" href="#">Newsletter</a></td>
                <td class="actions">
                    <a class="see-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Zobacz</a>
                    <a class="edit-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Edytuj</a>
                    <form action="#">
                        <button class="delete-record"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Usuń</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
