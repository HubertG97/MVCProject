@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add a Cryptocurrency</div>

                    <div class="card-body">
                        <form action="" method="post" class="pb-5">
                            <div class="input-group">
                                <input type="text" name="name">
                                <input type="text" name="ticker">
                            </div>
                            <button type="submit">Add</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
