@extends('backend.layouts.master')
@section('content')
<div class="post padd-70">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Section</th>
            <th scope="col">Title</th>
            <th scope="col">Position</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php $i = 0; @endphp
         @foreach ($postcontents as $item)
          <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $item->section->section_name }}</td>
            <td>{{ $item->title }}</td>
            <td>
           @if ($item->active == 0)
            <span style="color: #c7502c; font-weight:700">Pending</span>
            @else
           <span style="color:green; font-weight:700">Active</span>
           @endif
            </td>
            <td>
                @if ($item->active == 1)

                @else
                <form action="{{ route('postcontent.active', $item->id) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success">Active</button>
                </form>
               @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
