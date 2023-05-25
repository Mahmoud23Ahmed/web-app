@extends('welcome')

@section('content')
    
@foreach ($doctors as $doctor)
        
        <div>  
          <a href="{{$doctor->Email}}">
            {{$doctor->Email}}
           
          </a>
        </div>
        {{-- <a href="{{ route('doctor.edit' , $departement->id) }}">
          |Edit
        </div>   --}}
        <form action="{{ route('doctor.destroy' , ['id' => $doctor->academicnum]) }}" method="POST">
          @csrf
          @method('DELETE')
         <button type= "submit" class="btn btn-link">
           Delete
       </button>   
       </form>
   @endforeach

@endsection
