@extends('welcome')

@section('content')
    
<form action="/doctor" method="POST">
    @csrf
    <div>
        <label> Username </label>
        <input class="form-control" type="text" name="username" value=" {{ old('username') }}"> 
        @error('username')
           <div class="text text-danger">
               {{$message}}
           </div>
        @enderror
    </div>

    <div>
        <label> Password </label>
        <input class="form-control"  type="text" name="password" value=" {{ old('password') }}"> 
        @error('password')
           <div class="text text-danger">
               {{$message}}
           </div>
        @enderror
    </div>

    <div>
        <label> academic Number </label>
        <input class="form-control"  type="text" name="academicnum" value=" {{ old('academicnum') }}"> 
        @error('academicnum')
           <div class="text text-danger">
               {{$message}}
           </div>
        @enderror
    </div>

    <button type="submit">
        save
    </button>    
</form>


@endsection