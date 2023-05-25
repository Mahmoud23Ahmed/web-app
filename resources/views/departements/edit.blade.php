@extends('welcome')

@section('content')

<form action="{{route('departements.update' , $departements->id )}}" method="POST">
    @csrf
    @method("PUT")
    <div>
        <label> name </label>
        <input class="form-control" type="text" name="name" value="{{$departements->name}}"> 
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
    <button type= "submit"> 
        save
    </button>   
</form>
@endsection