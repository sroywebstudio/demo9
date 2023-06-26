@extends('layouts.main')

@section('admin-section')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>PIN</th>
                                <th>Rols</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="text-center">
                                    <th>{{ $loop->iteration }}</th>

                                    <td>
                                        <a href="{{ route('admin.user.edit', $user->id) }}">
                                            {{ $user->name }}
                                        </a>
                                    </td>

                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->userInfo->phone }}</td>
                                    <td>{{ $user->userInfo->contactInfo->address }}</td>
                                    <td>{{ $user->userInfo->contactInfo->pin }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            {{ $role->name }},
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                    {{ $users->links() }}
                </div>
            </div>

        </section>

    </main><!-- End #main -->
@endsection
