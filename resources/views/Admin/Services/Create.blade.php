@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session('status'))
            <h6 class="alert alert-success">success </h6>
            @endif
            <div class="card">
                <div class="card-header">Create new service</div>
                    <div class="card-body">
                        <form method="POST" action="store" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Choose Image</label>

                                <div class="col-md-6">
                                    <input id="phto" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Service name</label>

                                <div class="col-md-6">
                                    <input id="text" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Service details</label>

                                <div class="col-md-6">
                                    <input id="details" type="text" class="form-control @error('details') is-invalid @enderror" name="details" required autocomplete="details">

                                    @error('details')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
