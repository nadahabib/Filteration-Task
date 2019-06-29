@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="margin-left: -48px;">Change your Profile Picture</h2>
    @if ($message = Session::get('success'))
 
    <div class="alert alert-success alert-block">
 
        <button type="button" class="close" data-dismiss="alert">×</button>
 
            <strong>{{ $message }}</strong>
 
    </div>
    <br>
    @endif
 
    @if (count($errors) > 0)
 
        <div class="alert alert-danger">
 
            <strong>Opps!</strong> There were something went wrong with your input.
 
            <ul>
 
                @foreach ($errors->all() as $error)
 
                    <li>{{ $error }}</li>
 
                @endforeach
 
            </ul>
 
        </div>
      <br>
    @endif
    <form action="{{ url('save') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      @csrf
    <div class="avatar-upload col-12">
        <div class="avatar-edit">
            <input type='file' id="profile_picture" name="profile_picture" onchange="readURL(this);" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
    @if (auth()->user()->profile_picture != null)
        <img id="blah" src="/public/media/{{ auth()->user()['profile_picture'] }}" class="" width="150" height="150"/>
    @else
        <img id="blah" src="https://www.tutsmake.com/wp-content/uploads/2019/01/no-image-tut.png" class="" width="150" height="150"/>
    @endif
        </div>
 
    </div>
    <div class="avatar-upload col-6">
    <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form>
</div>
<script>
  function readURL(input, id) {
    id = id || '#blah';
    if (input.files &amp;&amp; input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }
</script>
@endsection