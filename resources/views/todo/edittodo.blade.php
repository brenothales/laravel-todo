@extends('layouts.app')

@section('title', 'Editar')

@section('content')
<div class="row">
  <div class="col-m-6">
    <form class="form-horizontal" method="post" action="{{url('/todo/'.$todo->id)}}">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="form-group">
        <label for="todo" class="col-sm-2 control-label">Projeto</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="todo" name="todo" placeholder="todo" value="{{$todo->todo}}">
          @if ($errors->has('todo'))
          <span class="help-block">
            <strong>{{ $errors->first('todo') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="category" class="col-sm-2 control-label">Categoria</label>
        <div class="col-md-5">
            <select name="category" class="form-control" id="category" name="category">
              <option value="Normal" selected>Normal</option>
              <option value="Urgente">Urgente</option>
              <option value="Extra Urgente">Extra Urgente</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="completed" class="col-sm-2 control-label">Finalizada?
        </label>
        <div class="col-md-5">
          <input type="checkbox" id="completed" value="{{$todo->completed}}">
          @if ($errors->has('completed'))
          <span class="help-block">
            <strong>{{ $errors->first('completed') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="category" class="col-sm-2 control-label">Descrição</label>
        <div class="col-md-5">
          <textarea class="form-control" id="description" name="description" placeholder="description">{{$todo->description}}</textarea>
          @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-md-5">
          <button type="submit" class="btn btn-default">Atualizar</button>
        </div>
      </div>
    </form>

  </div>
</div>
@endsection