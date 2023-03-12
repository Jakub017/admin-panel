@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Aktualności</h2>
<h4 class="section-subheading">Lista aktualności, które użytkownicy mogą przeczytać.</h4>
<div class="top-bar">
    <a href="#" class="add-button">Dodaj aktualność +</a>
    <form action="#" class="search-form">
        <input class="search-input" type="text" placeholder="Szukaj...">
        <img src="{{asset('img/actions-icons/search-icon.png')}}" alt="" class="search-icon">
    </form>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Tytuł</th>
                <th>Treść</th>
                <th>Kategoria</th>
                <th>Autor</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            <tr>
                <td>Wesołych świąt!</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis. Doloremque quam veritatis
                    sunt quae molestiae molestias...</td>
                <td>Wydarzenia</td>
                <td>Jakub</td>
                <td>
                    <div class="actions">
                        <a class="see-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Zobacz</a>
                        <a class="edit-record" href="#"><img src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                            Edytuj</a>
                        <form action="#">
                            <button class="delete-record"><img src="{{asset('img/actions-icons/delete-icon.png')}}"
                                    alt="">
                                Usuń</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Wesołych świąt!</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis. Doloremque quam
                    veritatis
                    sunt quae molestiae molestias...</td>
                <td>Wydarzenia</td>
                <td>Jakub</td>
                <td>
                    <div class="actions">
                        <a class="see-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Zobacz</a>
                        <a class="edit-record" href="#"><img src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                            Edytuj</a>
                        <form action="#">
                            <button class="delete-record"><img src="{{asset('img/actions-icons/delete-icon.png')}}"
                                    alt="">
                                Usuń</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Wesołych świąt!</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis. Doloremque quam
                    veritatis
                    sunt quae molestiae molestias...</td>
                <td>Wydarzenia</td>
                <td>Jakub</td>
                <td>
                    <div class="actions">
                        <a class="see-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Zobacz</a>
                        <a class="edit-record" href="#"><img src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                            Edytuj</a>
                        <form action="#">
                            <button class="delete-record"><img src="{{asset('img/actions-icons/delete-icon.png')}}"
                                    alt="">
                                Usuń</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Wesołych świąt!</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis. Doloremque quam
                    veritatis
                    sunt quae molestiae molestias...</td>
                <td>Wydarzenia</td>
                <td>Jakub</td>
                <td>
                    <div class="actions">
                        <a class="see-record" href="#"><img src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Zobacz</a>
                        <a class="edit-record" href="#"><img src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                            Edytuj</a>
                        <form action="#">
                            <button class="delete-record"><img src="{{asset('img/actions-icons/delete-icon.png')}}"
                                    alt="">
                                Usuń</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
