@extends('layouts.app')
@section('title', 'Add New Todo')
@section('content')
<div class="row">
  <div class="col-m-6">
    <form class="form-horizontal" method="post" action="{{url('/todo')}}">
      {{ csrf_field() }}
      <div class="form-group has-success">
        <label for="todo" class="col-sm-2 control-label">Tarefa</label>
        <div class="col-md-5">
          <input type="text" class="form-control form-control-success" id="todo" name="todo" placeholder="todo" value="{{ old('todo') }}">
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
          @if ($errors->has('category'))
          <span class="help-block">
            <strong>{{ $errors->first('category') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="category" class="col-sm-2 control-label">Descrição</label>
        <div class="col-md-5">
          <textarea class="form-control" id="description" name="description" placeholder="Descrição" value="{{ old('description') }}"></textarea>
          @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-md-5">
          <button type="submit" class="btn btn-default">Adicionar</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection