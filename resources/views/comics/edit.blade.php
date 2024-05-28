<!-- Con extends andiamo ad estendere la pagina app.blade.php, modificando alcuni valori di essa -->
@extends('layouts.app')
<!-- Con section andiamo a modificare il 'title' in 'Home' -->
@section('title', 'Comics')
<!-- Con section andiamo a modificare il 'content' con una semplice stringa o con un template -->
@section('content')
<div class="bg-black">
    <div class="container bg-black">
        <button class="fd-current-series-btn"><a class="text-white" href="{{ route('comics.index') }}">HOMEPAGE</a>

        </button>
        <div class="p-5 d-flex gap-5 justify-content-between align-items-center">
            <img class="f-d-detailImg" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <form action="{{route('comics.update', $comic->id)}}" method="POST" class="row g-3 needs-validation"
                novalidate>
                @csrf
                @method('PUT')
                <div class="col-md-4">
                    <label for="title" class="form-label text-white">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" value="{{ $comic->title }}"
                        required name="title">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label text-white">Author</label>
                    <input type="text" class="form-control" id="validationCustom02" name="author"
                        value="{{ $comic->author }}" placeholder="Author" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div>
                    <label for="description" class="form-label text-white">Description</label><br>
                    <textarea name="description" id="description" cols="30" rows="10">
                            {{ $comic->description }}
                        </textarea>
                </div>
                <div class="col-md-6">
                    <label for="release_date" class="form-label text-white">Release Date</label>
                    <input type="text" class="form-control" name="release_date" value="{{ $comic->release_date }}"
                        id="release_date" required>
                    <div class="invalid-feedback">
                        Release Date
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="condition" class="form-label text-white">Condition</label>
                    <select class="form-select" name="condition" value="{{ $comic->condition }}" id="condition"
                        required>
                        <option value="good" {{$comic->condition === 'good' ? 'selected' : ''}} > Good</option>
                        <option value="normal" {{$comic->condition === 'normal' ? 'selected' : ''}}> Normal</option>
                        <option value="bad" {{$comic->condition === 'bad' ? 'selected' : ''}}> Bad</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="thumb" class="form-label text-white">Thumb</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="rare" class="form-label text-white">Rare</label>
                    <input type="text" class="form-control" name="rare" id="rare" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <button type="submit" class="fd-button-card">EDIT</button>
                    <button type="reset" class="fd-button-card-red">DELETE</button>
                </div>
            </form>
        </div>
    </div>
    <div class="fd-style">
        <ul class="containerArticles d-flex align-items-center justify-content-between gap-5">
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="img1"
                    class="imgArticles">
                <p class="pArticles">DIGITAL COMICS</p>
            </li>
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="img2" class="imgArticles">
                <p class="pArticles">DC MERCHANDISE</p>
            </li>
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="img3"
                    class="imgArticles">
                <p class="pArticles">SUBSCRIPTION</p>
            </li>
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="img4" class="imgArticles">
                <p class="pArticles">COMIC SHOP LOCATOR</p>
            </li>
            <li class="d-flex align-items-center gap-3">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="img5" class="imgArticles">
                <p class="pArticles">DC POWER VISA</p>
            </li>
        </ul>
    </div>
    <!-- Ricordarsi di inserire l'endsection per chiudere la sessione -->
    @endsection