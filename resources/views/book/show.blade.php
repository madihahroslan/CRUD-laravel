@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Book Details') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <strong>{{$book->name}}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>
                            <div class="col-md-6">
                                <strong>{{$book->author}}</strong>                          
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="edition" class="col-md-4 col-form-label text-md-right">{{ __('Edition') }}</label>
                            <div class="col-md-6">
                                <strong>{{$book->edition}}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publisher" class="col-md-4 col-form-label text-md-right">{{ __('Publisher') }}</label>
                            <div class="col-md-6">
                                <strong>{{$book->publisher}}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publicationdate" class="col-md-4 col-form-label text-md-right">{{ __('Publication Date') }}</label>
                            <div class="col-md-6">
                                <strong>{{$book->publicationdate}}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="isbn" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>
                            <div class="col-md-6">
                                <strong>{{$book->isbn}}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="available" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>
                            <div class="col-md-6">
                                <strong>{{$book->available}}</strong>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="copies" class="col-md-4 col-form-label text-md-right">{{ __('Copies') }}</label>
                            <div class="col-md-6">
                                <strong>{{$book->copies}}</strong>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href = "{{route('book.index')}}" class="btn btn-lg btn-warning">Return</a>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
