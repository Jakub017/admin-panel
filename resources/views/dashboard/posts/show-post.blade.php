@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Informacje o aktualności - {{ $post->title }}</h2>
<div class="dashboard-block block-50">
    <div class="record-info">
        <div class="record-info-group">
            <span class="record-label">Tytuł aktualności</span>
            <span class="record-content">{{ $post->title }}</span>
        </div>
        <div class="record-info-group">
            <span class="record-label">URL</span>
            <span class="record-content">{{ $post->slug }}</span>
        </div>
        <div class="record-third-group">
            <div class="record-info-group">
                <span class="record-label">Kategoria</span>
                <span class="record-content">{{ $post->category }}</span>
            </div>
            <div class="record-info-group">
                <span class="record-label">Data dodania</span>
                <span class="record-content">{{ \Carbon\Carbon::parse($post->created_at)->format('d.m.Y H:i') }}</span>
            </div>
            <div class="record-info-group">
                <span class="record-label">Autor</span>
                <span class="record-content">{{ $post->author }}</span>
            </div>
        </div>
        <div class="record-info-group">
            <span class="record-label">Treść</span>
            <span class="record-content">{{ $post->content }}</span>
        </div>
        <div class="form-buttons">
            <a class="cancel-button" href="{{route('posts.index')}}">Wstecz</a>
            <a href="{{route('posts.edit', $post->id)}}" class="add-button">Edytuj</a>
        </div>
    </div>
</div>


@endsection
