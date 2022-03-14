@extends('layout')

@section('content')
<div>
    <form action="{{ route('show_checkout') }}" method="GET">
        @csrf
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>ORDER SUMMARY</h2>
                
                <h4>{{$burger->buns}}</h4>
                <ul>
                    @foreach($burger->meat as $meat)
                    <li>{{ $meat }}</li>
                    @endforeach
                </ul>                
                <ul>
                    @foreach($burger->vegetables as $vegetable)
                    <li>{{ $vegetable }}</li>
                    @endforeach
                </ul>
                <ul>
                    @foreach($burger->dressing as $dress)
                    <li>{{ $dress }}</li>
                    @endforeach
                </ul>
                <ul>
                    @foreach($burger->extras as $extra)
                    <li>{{ $extra }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>TOTAL</h4>
            </div>
        </div>
        <div class="row">
            <div class="col"><button class="btn btn-primary" type="button">EDIT</button></div>
            <input type="submit" class="btn btn-primary"  value="CHECKOUT">
           
        </div>
    </div>
</form>
</div>
@endsection