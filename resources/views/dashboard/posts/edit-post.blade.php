@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Dodaj aktualność</h2>
<div class="dashboard-block block-50">
    <form method="POST" action="{{route('posts.update', $post->id)}}" class="dashboard-form"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="dashboard-form-group">
            <label for="title" class="dashboard-label">Tytuł aktualności</label>
            <input name="title" type="text" class="dashboard-input" placeholder="Tytuł..." value="{{$post->title}}">
            @error('title')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="form-half-group">
            <div class="dashboard-form-group">
                <label for="thumbnail" class="dashboard-label">Zdjęcie główne</label>
                <input name="thumbnail" type="file" class="dashboard-input" placeholder="Zacznij wprowadzać...">
            </div>
            @error('thumbnail')
            <p>Błąd</p>
            @enderror
            <div class="dashboard-form-group">
                <label for="category" class="dashboard-label">Kategoria</label>
                <select class="dashboard-input" name="category">
                    <option value="">Wybierz kategorię</option>
                    <option value="Aktualności">Aktualności</option>
                    <option value="Wydarzenia">Wydarzenia</option>
                    <option value="Święta">Święta</option>
                    <option value="Kronika policyjna">Kronika policyjna</option>
                </select>
            </div>
            @error('category')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="content" class="dashboard-label">Treść aktualności</label>
            <textarea class="dashboard-input" name="content" cols="30" rows="10">{{ $post->content }}</textarea>
            @error('content')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="form-buttons">
            <a class="cancel-button" href="{{route('posts.index')}}">Anuluj</a>
            <button class="add-button">Zapisz</button>
        </div>
    </form>
</div>


@endsection
