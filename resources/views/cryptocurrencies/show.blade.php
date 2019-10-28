@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Details for {{$cryptocurrency->name}}</div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{$cryptocurrency->name}}</p>
                        <p><strong>Ticker:</strong> {{$cryptocurrency->ticker}}</p>
                        <p><strong>Website:</strong> {{$cryptocurrency->website}}</p>
                        <p><strong>Twitter:</strong> {{$cryptocurrency->twitter}}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
