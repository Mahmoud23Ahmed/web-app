@extends('welcome')

@section('content')
    
@foreach ($subjects as $subject)
        
        <div>  
          <a href="{{$subject->name}}">
            {{$subject->name}}
            <br>
            <input type="file" name="file">
          </a>
        </div>
       
        {{-- <form action="{{ route('doctor.destroy' , $doctors->academicnum) }}" method="POST">
          @csrf
          @method('DELETE')
         <button type= "submit" class="btn btn-link">
           Delete
       </button>   
       </form> --}}
   @endforeach

@endsection
