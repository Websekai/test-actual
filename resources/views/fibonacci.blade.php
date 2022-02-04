@extends('layout')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Génération de la suite de fibonacci</h1>
<form method="post" action="{{route('fibonacci-calc')}}">
    @csrf
    <label for="fibonacci_size">Longueur de la suite</label>
    <input type="text" id="fibonacci_size" name="fibonacci_size"/>
    <button type="submit">
        Afficher
    </button>
</form>
@if(!empty($fibonacciNumbers))
    <div>Suite de Fibonacci de longueur {{$size}}</div>
    @foreach($fibonacciNumbers as $number)
        <div>{{$number}}</div>
    @endforeach
@endif

<div class="info">Equivalent en ligne de commande : php artisan command:fibonacci X</div>
@endsection
