
Data da Inclusão: <input type="date" name="dtinclus" value="{{ $aluno->dtinclus }}">
Nº USP:<input type="text" name="nusp" value="{{ $aluno->nusp }}">
Nome:<input type="text" name="nome" value="{{ $aluno->nome }}">
Bloco:<select name="bloco">
  <option value="{{ $aluno->bloco }}" selected></option>
  <option>A</option><option>B</option><option>C</option><option>D</option>
  <option>E</option><option>F</option><option>G</option><option>A1</option>
</select>
Apto:<input type="text" name="apto" value="{{ $aluno->apto }}">
Quarto:<input type="text" name="quarto" value="{{ $aluno->quarto }}">
<button type="submit">Enviar</button>
