@extends('welcome')

@section('content')
    

    @if (session('status'))
       <div class="alert alert-success">
          {{ session('status') }} 
      </div> 
    @endif
@foreach ($departements as $departement)
        <div>
        <a href="{{$departement->name}}">
          {{$departement->name}}
        </a>
        <a href="{{ route('departements.edit' , $departement->id) }}">
          |Edit
        </div>  
        <form action="{{ route('departements.destroy' , $departement->id) }}" method="POST">
          @csrf
          @method('DELETE')
         <button type= "submit" class="btn btn-link">
           Delete
       </button>   
       </form>
   @endforeach

@endsection
