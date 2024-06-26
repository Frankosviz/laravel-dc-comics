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
        <div class="p-5 d-flex">
            <img class="f-d-detailImg" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div class="f-d-detailText">
                <h1 class="f-d-detailTitle">{{$comic->title}}</h1>
                <p>{{$comic->author}}</p>
                <p>{{$comic->condition}}</p>
                <p>{{$comic->release_date}}</p>
                <p>{{$comic->rare}}</p>
                <p>{{$comic->description}}</p>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <a class="fd-button-card" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
            <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" id="deleteButton" value="DELETE" class="fd-button-card-red">
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
    <!-- Scrivo la modale che mi permette di eliminare il fumetto, di default è hidden quindi non la vedo in pagina -->
    <div class="modal fade" id="exampleModalShow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare questo fumetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- Ricordarsi di inserire l'endsection per chiudere la sessione -->
    @endsection