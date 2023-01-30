@extends('layouts.app')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('admin.posts.store')}}" method="post" novalidate enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}}">
            <div class="invalid-feedback">
                @error('title')
                    <ul>
                        @foreach ($errors->get() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <label for="slug" class="form-label">Sugle</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug')}}">
            <div class="invalid-feedback">
                @error('slug')
                    <ul>
                        @foreach ($errors->get() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <label for="image" class="form-label">URL Image</label>
            <input type="url" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image')}}">
            <div class="invalid-feedback">
                @error('image')
                    <ul>
                        @foreach ($errors->get() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="mb-12">
            <label for="uploaded_img" class="form-label">Upload image</label>
            <input class="form-control @error('uploaded_img') is-invalid @enderror" type="file" id="uploaded_img" name="uploaded_img">
            <div class="invalid-feedback">
                @error('uploaded_img')
                    <ul>
                        @foreach ($errors->get() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="mb-12">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" placeholder="Content" name="content">{{ old('content')}}</textarea>
            <div class="invalid-feedback">
                @error('content')
                    <ul>
                        @foreach ($errors->get() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="mb-12">
            <label for="excerpt" class="form-label">Excerpt</label>
            <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" placeholder="Excerpt" name="excerpt">{{ old('excerpt')}}</textarea>
            <div class="invalid-feedback">
                @error('excerpt')
                    <ul>
                        @foreach ($errors->get() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Crea</button>
        </div>
    </form>
@endsection
