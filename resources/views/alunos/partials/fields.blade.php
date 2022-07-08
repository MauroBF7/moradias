<ul>
  <li><a href="/alunos/{{$aluno->id}}"> Nome:  {{ $aluno->nome }}</a></li>
  <li>Data : {{ $aluno ->dtinclus ?? '' }}</li>  
  <li>NºUSP: {{ $aluno->nusp ?? ''}}</li>
  <li>Bloco: {{ $aluno->bloco ?? ''}}</li>
  <li>Apto:  {{ $aluno->apto ?? ''}}</li>
  <li>Quarto:{{ $aluno->quarto ?? ''}}</li>
  <li> <form action="/alunos/{{$aluno->id}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" onclick="return confirm('Tem Certeza?');">Apagar</button>
        </form>
  </li>
</ul>