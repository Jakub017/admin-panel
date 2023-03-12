@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Klienci</h2>
<h4 class="section-subheading">Lista klientów, którzy zapisali się poprzez formularz.</h4>
<div class="top-bar">
    <a href="{{route('clients.create')}}" class="add-button">Dodaj klienta +</a>
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
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->company }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->email }}</td>
                <td class="tags">
                    @foreach(explode(',', $client->tags) as $tag)
                    <a class="tag" href="#">{{$tag}}</a>
                    @endforeach
                </td>
                <td class="actions">
                    <a class="see-record" href="{{route('clients.show', $client->id)}}"><img
                            src="{{asset('img/actions-icons/see-icon.png')}}" alt="">
                        Zobacz</a>
                    <a class="edit-record" href="{{route('clients.edit', $client->id)}}"><img
                            src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                        Edytuj</a>
                    <form method="POST" action="{{route('clients.destroy', $client->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="delete-record"><img src="{{asset('img/actions-icons/delete-icon.png')}}" alt="">
                            Usuń</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
