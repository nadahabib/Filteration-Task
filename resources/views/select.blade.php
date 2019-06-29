@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>credit_hours</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <form action="{{action('CoursesController@index', $course->id)}}" method="post">
        {{csrf_field()}}
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td><?php echo $course->id; ?></td>
                    <td><?php echo $course->name; ?></td>
                    <td><?php echo $course->credit_hours; ?></td>
                    <td><input type = "checkbox" class = "btn btn-danger" value = "{{$course->id}}" name = "courses_ids[]" ></td>
                </tr>
            @endforeach
            <br>
        </tbody>
    </table>
        <input name="_method" type="hidden">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
<div>
@endsection