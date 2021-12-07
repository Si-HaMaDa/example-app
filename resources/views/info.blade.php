@extends('layout1')

@section('content')
<h1>
    Hello!
</h1>
{{-- <form action="" method="POST">
    @csrf
    <input type="text" name="user" id="">
    <input type="password" name="pass" id="">
    <button>Send</button>
</form> --}}
{!! Form::open(['url' => 'foo/bar']) !!}

{{ Form::label('email', 'E-Mail Address', ['class' => 'awesome']);}}
{{ Form::text('email', 'example@gmail.com'); }}
{{ Form::file('file', $attributes = []); }}

{!! Form::close() !!}
@endsection
