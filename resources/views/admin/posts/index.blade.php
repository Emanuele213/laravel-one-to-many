@extends('layouts.app')

@section('content')
    @if (session('success_delete'))
    <div class="alert alert-success">
        {{-- {{ session('success_delete') }} --}}
        Il post con id {{ session('success_delete') }} e' stato eliminato correttamente
    </div>
    @endif
    <table class="table table-dark">
        <thead>
            <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center" scope="col">slug</th>
            <th class="text-center" scope="col">title</th>
            <th class="text-center" scope="col">View</th>
            <th class="text-center" scope="col">Edit</th>
            <th class="text-center" scope="col">Delete</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($posts as $post)
            <tr>
                <th class="text-center" scope="row">{{ $post->id}}</th>
                <td class="text-center">{{ $post->slug}}</td>
                <td class="text-center">{{ $post->title}}</td>
                <td class="text-center"><a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                <td class="text-center"><a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></td>
                <td class="text-center">
                    <button class="btn btn-danger btn-delete-me" data-id="{{ $post->id }}"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $posts->links()}}
    </div>

    @include('admin.partials.delete_confirmation')
@endsection
