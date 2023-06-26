@extends('layouts.main')

@section('admin-section')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Post Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Post Category</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            @if (session('category-status'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('category-status') }}
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.postcategory.create') }}">
                        <button class="btn btn-primary float-end m-3" type="button">Create Category</button>
                    </a>

                    <table class="table-bordered border-primary table">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="text-center">
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td class="{{ $category->status == 1 ? 'text-success' : 'text-warning' }}">
                                        {{ $category->status == 1 ? 'Active' : 'Deactive' }}</td>
                                    <td>
                                        <a href="{{ route('admin.postcategory.show', $category->id) }}">
                                            <button class="btn btn-warning" type="button">Show</button>
                                        </a>
                                        <a href="{{ route('admin.postcategory.edit', $category->id) }}">
                                            <button class="btn btn-info" type="button">Edit</button>
                                        </a>
                                        <form style="display: inline-block" action="{{ route('admin.postcategory.delete', $category->id) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                    {{$categories->links()}}
                </div>
            </div>

        </section>

    </main><!-- End #main -->
@endsection
