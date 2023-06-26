@extends('layouts.main')

@section('admin-section')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Create Admin</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Create Admin</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Admin</h5>

                    <!-- Horizontal Form -->
                    <form action="{{ route('admin.store') }}" method="post">
                        @csrf
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">First Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="firstname" type="text">
                                @error('firstname')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Last Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="lastname" type="text">
                                @error('lastname')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="email" type="text">
                                @error('email')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Date of Birth</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="dob" type="date">
                                @error('dob')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" id="gridRadios1" name="status" type="radio" value="1" checked="">
                                    <label class="form-check-label" for="gridRadios1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="gridRadios2" name="status" type="radio" value="0">
                                    <label class="form-check-label" for="gridRadios2">
                                        Deactive
                                    </label>
                                </div>

                            </div>
                        </fieldset>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Create Admin</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
