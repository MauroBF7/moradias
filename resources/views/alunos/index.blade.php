@extends('main')
@section('content')
@forelse ($alunos as $aluno)
  @include('alunos.partials.fields')
@empty
  Não há alunos cadastrados!
@endforelse
@endsection