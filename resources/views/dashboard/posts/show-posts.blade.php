@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Aktualności</h2>
<h4 class="section-subheading">Lista aktualności, które użytkownicy mogą przeczytać.</h4>
<div class="top-bar">
    <a href="{{route('posts.create')}}" class="add-button">Dodaj aktualność +</a>
    <form action="#" class="search-form">
        <input class="search-input" type="text" placeholder="Szukaj...">
        <img src="{{asset('img/actions-icons/search-icon.png')}}" alt="" class="search-icon">
    </form>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Zdjęcie główne</th>
                <th>Tytuł</th>
                <th>Kategoria</th>
                <th>Autor</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            @foreach($posts as $post)
            <tr>
                <td><img class="record-photo" src="{{asset('img/recycle.jpg')}}" alt=""></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category }}</td>
                <td>{{ $post->author }}</td>
                <td>
                    <div class="actions">
                        <a class="see-record" href="{{route('posts.show', $post->id)}}"><img
                                src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                            Zobacz</a>
                        <a class="edit-record" href="{{route('posts.edit', $post->id)}}"><img
                                src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                            Edytuj</a>
                        <form method="POST" action="{{route('posts.destroy', $post->id)}}">
                            @csrf
                            @method('DELETE')
                            <button class="delete-record"><img src="{{asset('img/actions-icons/delete-icon.png')}}"
                                    alt="">
                                Usuń</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
