@extends('layouts.layout')

@section('title', 'Просмотр категории')

@section('content')
    <h2>Просмотр категории: {{$category->name}}</h2>
    <div class="grid">
            <div>
                {{ $category->name }}
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
    </div>


@endsection
