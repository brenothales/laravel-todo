@extends('layouts.app')
@section('title', 'Home ')
@section('content')
<h2>Todas as Tarefas</h2>
<div class="row">
  <div class="col-md-11">
    <ul class="list-group">
      @if($todos != false)
        @foreach ($todos as $todo)
          <li class="list-group-item">
            <div class="row">
              <div class="col-md-6">
              <h4>
                <a class="secondary-content" href="{{url('/todo/'.$todo->id)}}">
                  {{ $todo->todo }}</a>
                <small>
                    <a class="secondary-content" href="{{url('/todo/'.$todo->id).'/edit'}}">
                    <span class="glyphicon glyphicon-pencil"></span></a>
                 </small></h4>
                  @if($todo->completed === true)
                  <a href="#" class="secondary-content" onclick="event.preventDefault();
                    document.getElementById('delete-form').submit();">
                    <span class="glyphicon glyphicon-trash"></span></a>
                      <form id="delete-form" action="{{url('/todo/'.$todo->id)}}" method="POST" style="display: none;"> {{ method_field('DELETE') }}{{ csrf_field() }}
                      </form>
                    @endif
              </div>
              <h1>{{$todo->completed}}</h1>
              <div class="col-md-6">
                    @if($todo->completed === false)
                      {{-- <h1>Finalizado</h1>Finalizada --}}
                    @endif

                    @if($todo->category === 'Normal')
                      <span class="label label-primary pull-right">{{$todo->category}}</span>
                    @elseif($todo->category === 'Urgente')
                      <span class="label label-warning pull-right">{{$todo->category}}</span>
                    @else
                      <span class="label label-danger pull-right">{{$todo->category}}</span>
                    @endif
          </li>

        @endforeach
      @else
        <li class="list-group-item"> Não foi adicionado <a href="{{ url('/todo/create') }}"> Clique aqui</a> para adicionar uma nova tarefa. </li>
      @endif
    </ul>
  </div>

  <div class="col-md-1">
    <img class="img-responsive img-circle" src="{{asset('storage/'.$image)}}">
  </div>
</div>
@endsection