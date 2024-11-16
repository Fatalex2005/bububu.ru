@extends('layouts.layout')

@section('title', 'Изменение категории')

@section('content')
    <h2>Изменение категории</h2>
    @include('categories.form', ['action' => route('categories.update', $category->id), 'method' => 'put'])
    @error('name')
    <p class="warning">{{ $message }}</p>
    @enderror
@endsection
