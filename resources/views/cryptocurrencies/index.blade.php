@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($cryptocurrencies as $cryptocurrency)
                    <div class="card">
                        <div class="card-header"><a href="/cryptocurrencies/{{ $cryptocurrency->id }}"> {{ $cryptocurrency->name }} ({{ $cryptocurrency->ticker }})</a></div>

                        <div class="card-body">

                            <div>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
