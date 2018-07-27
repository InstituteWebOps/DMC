@extends('app')

@section('content')
<form action="{{route('vol.store')}}" method="POST" class="form-group col-md-6 col-md-push-3">
    {{ csrf_field() }}
    <!-- <input type="hidden" name="_method" value="PUT" /> -->
    <legend>Sign Up for Volunteership</legend>
    <p>Some text about the work</p>
    <hr>
    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" class="form-control" name="name" placeholder="Your Name">
    </div>
    <div class="form-group">
        <label for="age">Age: </label>
        <input type="number" class="form-control" name="age" placeholder="Your age"></p>
    </div>
    <div class="form-group">
        <label for="phNo">Phone Number: </label>
        <div class="input-group">
            <span class="input-group-addon">+91</span>
            <input type="number" class="form-control" name="phNo" placeholder="Your Phone Number"></h5>
        </div>
    </div>
   
    <hr>
    <p class="text-right">
        <button type="submit" class="btn btn-info">Sign Up</button>
    </p>
</form>
@endsection