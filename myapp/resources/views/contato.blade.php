@extends('layout.app')



@section('corpo')
        <form method="POST" action="{{ route('enviar_contato') }}">
          First name:<br>
          <input type="text" name="firstname" value="Mickey">
          <br>
          Last name:<br>
          <input type="text" name="lastname" value="Mouse">
          <br><br>
          <input type="submit" value="Submit">
        </form> 
@endsection
