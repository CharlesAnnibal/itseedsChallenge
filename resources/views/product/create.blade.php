@extends('layout.main')
@section('content')
    
        <h2>{{$title}}</h2>
        
            <form class="form" method="POST" action="{{ route('create-submit') }}">
                <div class="form-group">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Nome</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-6 {{ $errors->has('cost') ? ' has-error' : '' }}">
                            <label for="cost" class="control-label">Cost</label>
                            <input id="cost" type="text" class="form-control" name="cost" value="{{ old('cost') }}" maxlength="10" required autofocus>
                            @if ($errors->has('cost'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cost') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mx-auto">
                            <input  type="submit" class="btn btn-success btn-lg btn-form" name="submit" value="Submit">
                            <a href="{{route('index')}}" class="btn-success btn btn-lg btn-form">Back</a>
                        </div>
                    </div>    
                </div>
            </form>
        </div>
@endsection