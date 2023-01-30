@extends('layouts.app')

@section('content')
    @if (session('success_delete'))
    <div class="alert alert-success">
        {{-- {{ session('success_delete') }} --}}
        La category con id {{ session('success_delete')->name }} e' stato eliminato correttamente
    </div>
    @endif
    <table class="table table-dark">
        <thead>
            <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center" scope="col">Slug</th>
            <th class="text-center" scope="col">Name</th>
            <th class="text-center" scope="col">View</th>
            <th class="text-center" scope="col">Edit</th>
            <th class="text-center" scope="col">Delete</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($categories as $category)
            <tr>
                <th class="text-center" scope="row">{{ $category->id}}</th>
                <td class="text-center">{{ $category->slug}}</td>
                <td class="text-center">{{ $category->name}}</td>
                <td class="text-center"><a href="{{ route('admin.categories.show', ['category' => $category->id]) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                <td class="text-center"><a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></td>
                <td class="text-center">
                    <button class="btn btn-danger btn-delete-me" data-id="{{ $category->id }}"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $categories->links()}}
    </div>

    @include('admin.partials.delete_confirmation')
@endsection
