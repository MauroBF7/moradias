@extends('main')
@section('content')
<form method="POST" action="/alunos/{{$aluno->id}}">
    @csrf
    @method('patch')
    @include('alunos.partials.form')
</form>
@endsection