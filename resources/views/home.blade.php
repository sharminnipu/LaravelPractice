@extends('template')
@section("title")
   HomePage
@endsection
@section('content')
  <h1>hello guyz!! Fill Up the form!!</h1>
<form action="{{url('/form')}}" method="POST">
  @csrf
  <input type="text" name="name" placeholder="Name"> <br><br>
  <input type="text" name="email" placeholder="E-mail"><br><br>
  <button type="submit">Submit</button>
</form>
 
  

@endsection
