@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
   
    <div class="row">
        <a href="{{url('/change_profile_picture')}}" class="btn btn-success">Change Profile Picture</a>
       <a href="{{url('/courses/select')}}" class="btn btn-default">Add Courses</a>
       <a href="{{url('/courses')}}" class="btn btn-default">All Courses</a>
    </div>
</div>
@endsection
