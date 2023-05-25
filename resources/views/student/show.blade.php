@extends('welcome')

@section('content')
    
@foreach ($students as $students)
       
        {{$students->Email}}
        
        <form action="{{ route('student.destroy' , $students->student) }}" method="POST">
          @csrf
          @method('DELETE')
         <button type= "submit" class="btn btn-link">
           Delete
       </button>   
       </form>
   @endforeach

@endsection
