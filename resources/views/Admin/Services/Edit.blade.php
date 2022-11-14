@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session('status'))
            <h6 class="alert alert-success">success </h6>
            @endif
            <div class="card">
                <div class="card-header">Edit a service</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('EdnUser-services/'.$service->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Choose Image</label>

                                <div class="col-md-6">
                                    <input id="phto" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo"  required autofocus>
                                    <img loading="lazy" src="{{asset('images/services/'.$service->photo)}}"width="300px" height="200px" alt="service-icon">
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
                                    <input id="text" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $service->name }}" required autocomplete="name">

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
                                    <input id="details" type="text" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ $service->details }}" required autocomplete="details">

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
                                    Update
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
    
