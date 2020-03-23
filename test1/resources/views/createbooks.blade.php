@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'createbooksController@store','method' => 'POST'])!!}
{{Form::text('title',null, ['placeholder' =>"title of the book",'required' => 'required'])}}<br/><br/>
{{Form::text('author','', ['placeholder' =>"author of the book",'required' => 'required'])}}<br/><br/>
{{Form::text('numberofpages','', ['placeholder' =>"number of pages of the book",'required' => 'required'])}}<br/><br/>
{{Form::submit("ajouter")}}
{!! Form::close() !!}

@endsection