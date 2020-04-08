@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  <ul>

            {!! Form::open(['action' => 'Clubcontroller@post','method' => 'POST'])!!}
            {{Form::label('Placeholder : ')}}<br>
            {{Form::text('rs_id','',['required'=>'required']) }}<br><br>

            {{Form::label('Name Of Club : ')}}<br>
            {{Form::text('rc_name','',['required'=>'required']) }}<br><br>

            {{Form::label('Name Of Event : ')}}<br>
            {{Form::text('revnmt_name','',['required'=>'required']) }}<br><br>

            
            {{Form::label('Mobile phone number :')}}<br>
            {{Form::number('r_phone','',['required'=>'required']) }}<br><br>
            {{Form::label('E-Mail Address :')}}<br>
            {{Form::email('r_email','',['required'=>'required']) }}<br><br>
            
            
             {{ Form::datetime('start_date:','',['placeholder' =>"write your start date",'required' => 'required'] ) }} <br><br>
              
             {{ Form::datetime('end_date:','',['placeholder' =>"write your start date",'required' => 'required'] ) }} <br><br>
             {{Form::submit('Send a Request !')}}   <br><br>
             {!! Form::close() !!}    
                    
 </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection