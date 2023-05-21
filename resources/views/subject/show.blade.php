@extends('welcome')

@section('content')
    

    @if (session('status'))
       <div class="alert alert-success">
          {{ session('status') }} 
      </div> 
    @endif
@foreach ($subjects as $subject)
        <div>
        <a href="{{$subject->name}}">
          {{$subject->name}}
        </a>
        <a href="{{ route('subjects.edit' , $subject->id) }}">
          |Edit
        </div>  
        <form action="{{ route('subjects.destroy' , $subject->id) }}" method="POST">
          @csrf
          @method('DELETE')
         <button type= "submit" class="btn btn-link">
           Delete
       </button>   
       </form>
   @endforeach

@endsection
