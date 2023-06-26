@extends('layouts.main')

@section('admin-section')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Post</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Post</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CREATE</h5>

                    <!-- Horizontal Form -->
                    <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputText" name="title" type="text" value="{{ old('title') }}">
                                @error('title')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputEmail3">Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="inputState" name="category">
                                    <option value="-1">Choose Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <p class="text-danger text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputNumber">File Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="formFile" type="file" name="image">
                                @error('image')
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
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
