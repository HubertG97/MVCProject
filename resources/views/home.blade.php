@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($cryptocurrencies as $cryptocurrency)
                <div class="card">
                    <div class="card-header"><a href="/cryptocurrencies/{{ $cryptocurrency->id }}"> {{ $cryptocurrency->name }} ({{ $cryptocurrency->ticker }})</a></div>

                    <div class="card-body">
                        <form action="" method="post" class="pb-5">
                            <input type="hidden" name="id" value="{{ $cryptocurrency->id }}">
                            <button name="rating" value=1 type="submit">Like</button>
                            <button name="rating" value=0 type="submit">Dislike</button>
                            @csrf
                        </form>
                        <div>
                            <p>Likes: {{$likeCount}}</p>
                            <p>Dislikes: {{$dislikeCount}}</p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
