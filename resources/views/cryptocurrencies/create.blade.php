@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add a Cryptocurrency</div>

                    <div class="card-body">
                        <form action="" method="post" class="pb-5">
                            <input class="form-control mb-4" type="text" name="name" placeholder="Name Cryptocurrency">
                            {{ $errors->first('name') }}
                            <input class="form-control mb-4" type="text" name="ticker" placeholder="Ticker">
                            {{ $errors->first('ticker') }}
                            <br>
                            <button type="submit">Add</button>
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
