@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Book') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('book.store') }}">
                    {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>
                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control" name="author">                           
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="edition" class="col-md-4 col-form-label text-md-right">{{ __('Edition') }}</label>
                            <div class="col-md-6">
                                <input id="edition" type="text" class="form-control" name="edition">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publisher" class="col-md-4 col-form-label text-md-right">{{ __('Publisher') }}</label>
                            <div class="col-md-6">
                                <input id="publisher" type="text" class="form-control" name="publisher">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publicationdate" class="col-md-4 col-form-label text-md-right">{{ __('Publication Date') }}</label>
                            <div class="col-md-6">
                                <input id="publicationdate" type="date" class="form-control" name="publicationdate">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="isbn" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="isbn">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="available" class="col-md-4 col-form-label text-md-right">{{ __('Available') }}</label>
                            <div class="col-md-6">
                                <input id="available" type="text" class="form-control" name="available">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="copies" class="col-md-4 col-form-label text-md-right">{{ __('Copies') }}</label>
                            <div class="col-md-6">
                                <input id="copies" type="text" class="form-control" name="copies">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href = "{{route('book.index')}}" class="btn btn-lg btn-warning">Return</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
