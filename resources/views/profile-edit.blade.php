@extends('layout')
@extends('main')
@section('main_content')
    <section style="background-color: #041c32">
        <div class="container py-5" style="margin-top:0px !important;">
            <div class="row">
                <div class="col">
                    {{-- <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4 ">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active" aria-current="page">Update {{ $user->name }}'s Profile
                            </li>
                        </ol>
                    </nav> --}}
                </div>
            </div>


            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            @if(!$user->is_female)
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                     alt="avatar"
                                     class="rounded-circle img-fluid" style="width: 150px;">
                            @else
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                     alt="avatar"
                                     class="rounded-circle img-fluid" style="width: 150px;">
                            @endif
                            <h5 class="my-3">{{ $user->name }}</h5>
                            <p class="text-muted mb-4">{{ $user->city }} / {{ $user->country->name }}</p>
                            <div class="d-flex justify-content-center mb-2">
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('profile-update') }}" method="POST">

                        @csrf

                        @method('PUT')

                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><input value="{{ $user->name }}" type="text"
                                                                              class="form-control" name="name"></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><input value="{{ $user->phone }}" name="phone"
                                                                              type="text" class="form-control"></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Mobile</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><input value="{{ $user->mobile }}"
                                                                              name="mobile" type="text"
                                                                              class="form-control"></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div id="dropdown">
                                        <label for="country">Your Gender</label><br>
                                        <select class="form-select" name="is_female"
                                                aria-label="Default select example">
                                            <option value="">Select your gender</option>
                                            <option value="0" @if($user->is_female == 0) selected="selected" @endif>Male</option>
                                            <option value="1" @if($user->is_female == 1) selected="selected" @endif>Female</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">
                                                <label for="country">Your City</label><br>
                                                <input name="city" type="text" class="form-control"
                                                       value="{{ $user->city }}">
                                            <div id="dropdown">
                                                <label for="country">Your Country</label><br>
                                                <select class="form-select" name="country"
                                                        aria-label="Default select example">
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <h1>{{ $country }}</h1>
                                                        <option value="{{$country->id}}" @if($country->id == $user->country_id) selected="selected" @endif>{{$country->name}}
                                                            / {{ $country->code }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg updateBtn">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
