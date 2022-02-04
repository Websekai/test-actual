@extends('layout')

@section('content')
<h1>ChessBoard</h1>
<div>(Numérotation A1-H8 utilisée dans le test unit)</div>
    <table class="board">
        @for($line = 1; $line < 9; $line++)
            <tr>
                @for($col = 'A'; $col < 'I'; $col++)
                    <td>{{$col}}{{$line}}</td>
                @endfor
            </tr>
        @endfor
    </table>
@endsection
