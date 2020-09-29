<h1>hello this  is contact page!!</h1>

<form action="{{url('/contact')}}" method="POST" >
  @csrf
<input type="text" name="name">
<button>Submit</button>
</form>