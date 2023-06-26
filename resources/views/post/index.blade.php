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
            @if (session('post-status'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('post-status') }}
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.post.create') }}">
                        <button class="btn btn-primary float-end m-3" type="button">Create Post</button>
                    </a>

                    <table class="table-bordered border-primary table">
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
                            @foreach ($posts as $post)
                                <tr class="text-center">
                                    <th>{{ $loop->iteration }}</th>
                                    <td>
                                        <img src="{{asset('storage')}}/{{$post->image}}" width="50px">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->postCategory->name }}</td>
                                    <td class="{{ $post->status == 1 ? 'text-success' : 'text-warning' }}">
                                        {{ $post->status == 1 ? 'Active' : 'Deactive' }}</td>
                                    <td>
                                        <a href="{{ route('admin.post.edit', $post->id) }}">
                                            <button class="btn btn-info" type="button">Edit</button>
                                        </a>
                                        <form style="display: inline-block" action="{{ route('admin.post.destroy', $post->id) }}"
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
                    {{$posts->links()}}
                </div>
            </div>

        </section>

    </main><!-- End #main -->
@endsection
