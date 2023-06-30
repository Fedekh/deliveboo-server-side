@extends('layouts.app')
@section('content')
    <h2 class="mx-5">Crea il tuo piatto</h2>
    <div class="mx-5">

        <form class="d-flex flex-column form" action="{{ route('admin.dishes.update', $dish->slug)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="dish_name">Nome Piatto: </label>
            <input type="text" name="dish_name" id="dish_name" value="{{old('dish_name', $dish->dish_name)}}">

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name='description'>{{old('description', $dish->description)}}</textarea>
            </div>

            <div class="mb-3">
                <label for="ingredients" class="form-label">Ingredienti</label>
                <textarea class="form-control" id="ingredients" rows="2" name='ingredients'>{{old('ingredients', $dish->ingredients)}}</textarea>
            </div>

            <label for="price">Prezzo: € </label>
            <input type="number" name="price" id="price" step="0.01" value="{{old('price', $dish->price)}}">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="is_available">
                <label class="form-check-label" for="is_available">
                    Terminato
                </label>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label"></label>
                <input class="form-control" type="file" id="img" value="{{old('img', $dish->img)}}">
            </div>
            <button type="submit" class="btn btn-primary">SALVA</button>

        </form>
    </div>
@endsection

<style>
    .form {
        width: 400px
    }

    .btn {
        width: 120px;
        margin-top: 20px
    }
</style>