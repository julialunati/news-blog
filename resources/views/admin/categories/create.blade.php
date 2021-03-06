@extends('layouts.admin')

@section('title') Add category - @parent @stop

@section('content')


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add category</h1>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Form for inserting new category</li>
        </ol>

        @include('notifications.error')

    </div>
    <div class="container-fluid px-4">
        <form method="post" action="{{ route('admin.categories.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div><br>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
</main>

@endsection