<!-- Con extends andiamo ad estendere la pagina app.blade.php, modificando alcuni valori di essa -->
@extends('layouts.app')
<!-- Con section andiamo a modificare il 'title' in 'Home' -->
@section('title', 'Comics')
<!-- Con section andiamo a modificare il 'content' con una semplice stringa o con un template -->
@section('content')
<div class="bg-black">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container bg-black">
        <form action="{{ route('comics.index') }}" method="GET" id="search-form">
        <select class="fd-current-series-btn" id="search" required name="search">
            <option value="{{ route('comics.index') }}">All</option>
            <option value="good">good</option>
            <option value="normal">normal</option>
            <option value="bad">bad</option>
        </select>
        </form>
        
    </div>
    <div class="container d-flex flex-wrap gap-5 bg-blackFD">
        @foreach ($comics as $comic)
            <div class="d-flex flex-column">
                <div>
                    <img src="{{ $comic['thumb']}}" class="card-img-top imgComics" alt="imgComic">
                </div>
                <div class="f-d-card-body">
                    <a class="fd-button-card" href="{{ route('comics.show', $comic->id) }}">DETAILS</a>
                    <a class="fd-button-card" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pt-5 pb-5">
        <button class="fd-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
            aria-controls="staticBackdrop">
            LOAD MORE
        </button>
        <div class="offcanvas offcanvas-start bg-blue" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
            aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">Let's load a new Comic!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <form action="{{route('comics.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" required name="title">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Author</label>
                        <input type="text" class="form-control" id="validationCustom02" name="author" placeholder="Author" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div>
                        <label for="description" class="form-label">Description</label><br>
                        <textarea name="description" id="description" cols="30" rows="10">

                        </textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="release_date" class="form-label">Release Date</label>
                        <input type="text" class="form-control" name="release_date" id="release_date" required>
                        <div class="invalid-feedback">
                            Release Date
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="condition" class="form-label">Condition</label>
                        <select class="form-select" name="condition" id="condition" required>
                            <option selected disabled value="All">All</option>
                            <option value="good">Good</option>
                            <option value="normal">Normal</option>
                            <option value="bad">Bad</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" name="thumb" id="thumb" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="rare" class="form-label">Rare</label>
                        <input type="text" class="form-control" name="rare" id="rare" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Create</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="fd-style">
    <ul class="containerArticles d-flex align-items-center justify-content-between gap-5">
        <li class="d-flex align-items-center gap-3">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="img1" class="imgArticles">
            <p class="pArticles">DIGITAL COMICS</p>
        </li>
        <li class="d-flex align-items-center gap-3">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="img2" class="imgArticles">
            <p class="pArticles">DC MERCHANDISE</p>
        </li>
        <li class="d-flex align-items-center gap-3">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="img3" class="imgArticles">
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