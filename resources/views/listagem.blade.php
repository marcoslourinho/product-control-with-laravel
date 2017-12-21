@extends('principal')

@section('conteudo')
<h1 class="text-center">Lista de Produtos</h1>
<hr>
<div class="container">
  <table class="table">
    <tr>
      <th>Nome</th>
      <th>Valor</th>
      <th>Descrição</th>
      <th>Quantidade</th>
      <th>Detalhar</th>
      <th>Excluir</th>
    </tr>
    @foreach ($produtos as $p)
    <tr class="{{ $p->quantidade <=1 ? 'danger' : '' }}">
      <td>{{ $p->nome }}</td>
      <td>{{ $p->valor }}</td>
      <td>{{ $p->descricao }}</td>
      <td>{{ $p->quantidade }}</td>
      <td>
        <a href="/produtos/mostra/{{$p->id}}">
          Detalhar
        </a>
      </td>
      <td>
        <a href="/produtos/remove/{{$p->id}}">
          Excluir
        </a>
      </td>
    </tr>
    @endforeach
  </table>

  @if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong>
    O produto {{ old('nome') }} foi adicionado.
  </div>
  @endif

</div>
@stop
