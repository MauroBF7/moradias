@extends('main')
@section('content')
<form method="post" action="/alunos">
    @csrf
    @include('alunos.partials.form')
</form>
@endsection
