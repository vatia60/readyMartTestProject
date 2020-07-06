@extends('backend.layouts.master')
@section('content')
 <div class="section padd-70">
    @include('backend.partials.errormsg')
     <div class="row">
         <div class="col-md-7">
            <form action="{{ route('section.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Section Name</label>
                    <input name="section_name" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Create Section</button>
            </form>
         </div>
         <div class="col-md-5"></div>
     </div>

 </div>
@endsection
