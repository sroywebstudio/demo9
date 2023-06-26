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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>

                    <!-- Default List group -->
                    <ul class="list-group">
                        <li class="list-group-item">
                            NAME: <span class="text-primary mx-4">{{ $category->name }}</span>
                        </li>
                        <li class="list-group-item">
                            SLUG: <span class="text-primary mx-4">{{ $category->slug }}</span>
                        </li>
                        <li class="list-group-item">STATUS:
                            <span class="{{ $category->status == 1 ? 'text-info' : 'text-warning' }} mx-4">
                                {{ $category->status == 1 ? 'Active' : 'Deactive' }}
                            </span>
                        </li>
                    </ul><!-- End Default List group -->

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>

                    <!-- Table with stripped rows -->
                    <table class="table-striped table">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category->posts as $post)
                                <tr class="text-center">
                                    <th>{{ $loop->iteration }}</th>
                                    <td>
                                        <img src="{{ asset('storage') }}/{{ $post->image }}" width="50px">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->postCategory->name }}</td>
                                    <td class="{{ $post->status == 1 ? 'text-success' : 'text-warning' }}">
                                        {{ $post->status == 1 ? 'Active' : 'Deactive' }}</td>
                                    <td>
                                        <a href="{{ route('admin.post.edit', $post->id) }}">
                                            <button class="btn btn-info" type="button">Edit</button>
                                        </a>
                                        <form style="display: inline-block" action="{{ route('admin.post.destroy', $post->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </section>

    </main><!-- End #main -->
@endsection
