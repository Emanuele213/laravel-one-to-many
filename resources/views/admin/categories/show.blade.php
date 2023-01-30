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
                <th class="text-center" scope="col">Name</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th class="text-center" scope="row">{{ $category->id}}</th>
                <th class="text-center" scope="row">{{ $category->name}}</th>
                {{-- <th class="text-center" scope="row"><img src="{{ asset('storage/' . $post->uploaded_img )}}" width="100px" height="100px"></th> --}}
            </tr>
        </tbody>
    </table>
    <p>
        <strong>Descrizione: </strong>{{ $category->description}}
    </p>
    <ul>
        @foreach ($category->posts as $post)
            <li><a href="{{ route('admin.posts.show', ['post' => $post])}}">{{ $post->title}}</a></li>
        @endforeach
    </ul>
    <td class="text-center"><a href="{{ route('admin.categories.index', ['post' => $post->id]) }}" class="btn btn-primary">Torna indietro</a></td>

    @include('admin.partials.delete_confirmation')
@endsection
