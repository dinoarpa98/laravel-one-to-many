@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif

        <a href=" {{route('admin.posts.create')}} " class="btn btn-success my-2">Crea post</a>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                    <th scope="col">image</th>
                    <th scope="col">slug</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <th>{{ $post->title }}</th>
                    <td>
                        <p>{{ $post->content }}</p>
                    </td>
                    <td>
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" width="50">
                    </td>
                    <td> {{ $post->slug }} </td>
                    <td class="d-flex">
                        <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary mx-2">View</a>
                       
                        @include('includes.deletePost')
                        <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary mx-2">Edit</a>
                    </td>
                </tr>                    
                @empty
                  <h2> non ci sono post</h2>
                @endforelse

            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
