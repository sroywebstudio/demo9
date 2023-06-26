@extends('layouts.main')

@section('admin-section')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Edit User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">EDIT</h5>

                    <!-- Horizontal Form -->
                    <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="name" type="text" value="{{ $user->name }}">
                                @error('name')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="email" type="text" value="{{ $user->email }}">
                                @error('email')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="password" type="text">
                                @error('password')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Phone</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="phone" type="text" value="{{ $user->userInfo->phone }}">
                                @error('phone')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">PIN</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="pin" type="text" value="{{ $user->userInfo->contactInfo->pin }}">
                                @error('pin')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputPassword">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 100px">{{ $user->userInfo->contactInfo->desc }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">City</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="inputState" name="category">
                                    <option value="-1">Choose City</option>
                                    <option value="">City Name</option>
                                </select>
                                @error('category')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Update User</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
