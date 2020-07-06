@extends('backend.layouts.master')
@section('content')
<div class="post padd-70">
    @include('backend.partials.errormsg')
    <form action="{{ route('postcontent.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Section</label>
          <select name="section_id" class="form-control">

            <option value="" disabled selected>Select Section</option>

            @foreach ($sections as $section)

            <option value="{{ $section->id }}">{{ $section->section_name }}</option>

            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Video</label>
            <input type="text" name="video" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create Post</button>
    </form>
</div>
@endsection
