@extends('welcome')

@section('content')
    
<form action="/update" method="POST">
    @csrf
    <div>
        <label> Upload </label>
        <a class="btn btn-success" href="" > download </a>
        <input class="form-control" type="text" name="username" value=" {{ old('username') }}"> 
    </div>

</form>


@endsection