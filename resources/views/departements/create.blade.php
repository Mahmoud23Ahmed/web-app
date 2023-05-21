@extends('welcome')

@section('content')
    
<form action="/departements" method="POST">
    @csrf
    <div>
        <label> Departement Name </label>
        <input class="form-control" type="text" name="name" value=" {{ old('name') }}"> 
        @error('name')
           <div class="text text-danger">
               {{$message}}
           </div>
        @enderror
    </div>

    <div>
        <label> code </label>
        <input class="form-control"  type="text" name="code" value=" {{ old('code') }}"> 
        @error('code')
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