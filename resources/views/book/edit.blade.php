@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<body>
<html>
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Book') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('book.update', $book->id) }}">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value={{$book->name}}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>
                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control" name="author" value={{$book->author}}>                           
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="edition" class="col-md-4 col-form-label text-md-right">{{ __('Edition') }}</label>
                            <div class="col-md-6">
                                <input id="edition" type="text" class="form-control" name="edition" value={{$book->edition}}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publisher" class="col-md-4 col-form-label text-md-right">{{ __('Publisher') }}</label>
                            <div class="col-md-6">
                                <input id="publisher" type="text" class="form-control" name="publisher" value={{$book->publisher}}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publicationdate" class="col-md-4 col-form-label text-md-right">{{ __('Publication Date') }}</label>
                            <div class="col-md-6">
                                <input id="publicationdate" type="date" class="form-control" name="publicationdate" value={{$book->publicationdate}}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="isbn" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="isbn" value={{$book->isbn}}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="available" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>
                            <div class="col-md-6">
                                <input id="available" type="text" class="form-control" name="available" value={{$book->available}}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="copies" class="col-md-4 col-form-label text-md-right">{{ __('Copies') }}</label>
                            <div class="col-md-6">
                                <input id="copies" type="text" class="form-control" name="copies" value={{$book->copies}}>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href = "/librarysyst/book" class="btn btn-lg btn-warning">Return</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
