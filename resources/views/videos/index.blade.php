<!-- Con extends andiamo ad estendere la pagina app.blade.php, modificando alcuni valori di essa -->
@extends('layouts.app')
<!-- Con section andiamo a modificare il 'title' in 'Home' -->
@section('title', 'Comics')
<!-- Con section andiamo a modificare il 'content' con una semplice stringa o con un template -->
@section('content')
    <h1>Video</h1>
    <p class="fw-bold">Questa è zona dove ci saranno i contenuti Video</p>
<!-- Ricordarsi di inserire l'endsection per chiudere la sessione -->
@endsection