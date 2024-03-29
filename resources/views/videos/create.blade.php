@extends('master')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['url'=>'videos', 'class'=>'form-horizontal']) !!}
            		
            		<div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('title','Tytył:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('title', null, ['class'=>'form-cntrol'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('description','Opis:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::textarea('description', null, ['class'=>'form-cntrol'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('url','URL filmu:')!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('url', null, ['class'=>'form-cntrol'])!!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Dodaj artykuł', null, ['class'=>'btn btn-primary'])!!}
                        </div>
                    </div>
                    
                {!!Form::close()!!}

            </div>
        </div>
    </div>
</div>

@stop