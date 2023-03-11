@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Usługi</h2>
<h4 class="section-subheading">Lista usług, które będą wyświetlać się na stronie internetowej.</h4>
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
                <th>Zdjęcie</th>
                <th>Nazwa usługi</th>
                <th>Opis usługi</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            <tr>
                <td><img class="record-photo" src="{{asset('img/recycle.jpg')}}" alt=""></td>
                <td>Recykling</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis. Doloremque quam veritatis
                    sunt quae molestiae molestias...</td>
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
                <td><img class="record-photo" src="{{asset('img/recycle.jpg')}}" alt=""></td>
                <td>Recykling</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis. Doloremque quam
                    veritatis
                    sunt quae molestiae molestias...</td>
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
                <td><img class="record-photo" src="{{asset('img/recycle.jpg')}}" alt=""></td>
                <td>Recykling</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis. Doloremque quam
                    veritatis
                    sunt quae molestiae molestias...</td>
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
                <td><img class="record-photo" src="{{asset('img/recycle.jpg')}}" alt=""></td>
                <td>Recykling</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis. Doloremque quam
                    veritatis
                    sunt quae molestiae molestias...</td>
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
