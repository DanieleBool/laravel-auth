@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuovo Post</div>
                <div class="card-body">
                    <form action="{{route("posts.store")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titolo:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Titolo del post" value="{{old("title")}}">
                            @error("title")
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Contenuto:</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="6" name="content" placeholder="Contenuto del post">{{old("content")}}</textarea>
                            @error("content")
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input @error('published') is-invalid @enderror" id="published" name="published" {{old("published") ? "checked" : ""}}>
                            <label class="form-check-label" for="published">Pubblica</label>
                            @error("published")
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <a href="{{route("posts.store")}}"><button type="submit" class="btn btn-primary">Crea</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection