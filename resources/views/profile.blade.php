@extends ('layout')
@extends('main')
<section style="background-color: #041c32;">
    <div class="container py-5" style="margin-top:0px !important">
        <div class="row">
            <div class="col">
                {{-- <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}'s Profile</li>
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
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
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
                                    <p class="text-muted mb-0">{{ $user->phone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->mobile }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Gender</p>
                                </div>
                                @if(!$user->is_female)
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Male</p>
                                    </div>
                                @else
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Female</p>
                                    </div>
                                @endif
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->city }}, {{ $user->country->name }}
                                        , {{ $user->country->code }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('profile-edit') }}" method="get" class="centar">
                    <button type="submit" class="logedIn"><i class="btn btn-primary btn-lg btn-block btnProfil">Edit Profile</i>
                    </button>
                </form>
                @if(Auth::check())
                    <form action="{{ route('logout') }}" method="post" class="centar">
                        @csrf
                        <button type="submit" class="logedIn"><i class="btn btn-primary btn-lg btn-block btnProfil">Logout</i>
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</section>
