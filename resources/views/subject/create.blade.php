@extends('welcome')

@section('content')
    
<form action="/subjects" method="POST">
    @csrf
    <div>
        <label> name </label>
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

    <div>
        <label> departement_Id </label>
        <select name="departement_id" class="form-select">
          @foreach ($departements as $departements)
            <option value="{{$departements->id}}">  
                 {{$departements->name}}
            </option>    
          @endforeach
        </select>   
    </div>

    <button type="submit">
        save
    </button>    
</form>


@endsection