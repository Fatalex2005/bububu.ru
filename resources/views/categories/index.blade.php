@extends('layouts.layout')

@section('title', 'Категории товаров')

@section('content')
    <h2>Категории товаров</h2>
    <a class="btn" href="{{ route('categories.create') }}">Добавить категорию</a>
    <div class="grid">
        @foreach($categories as $category)
            <div>
                {{ $category->name }}
            </div>
            <div>
                <a href="{{ route('categories.show', $category->id) }}" title="Просмотреть">
                    <img class="w25" src="{{ asset('assets/images/show.png') }}" alt="Просмотреть">
                </a>
            </div>
            <div>
                <a href="{{ route('categories.edit', $category->id) }}" title="Изменить">
                    <img class="w25" src="{{ asset('assets/images/edit.png') }}" alt="Изменить">
                </a>
            </div>
            <div>
                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="delete" type="submit" title="Удалить">
                        <img class="w25" src="{{ asset('assets/images/delete.png') }}" alt="Удалить">
                    </button>
                </form>
            </div>
        @endforeach
    </div>


@endsection
