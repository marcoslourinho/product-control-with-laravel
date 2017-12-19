@extends('principal')

@section('conteudo')
  <h1 class="text-center"><b>Detalhes do Produto:</b> {{ $p->nome }} </h1>
  <hr>
  <div class="container">
    <table class="table">
      <tr>
        <th>
          Descrição:
        </th>
        <td>
          {{ $p->descricao }}
        </td>
      </tr>
      <tr>
        <th>
          Valor:
        </th>
        <td>
          R$ {{ $p->valor }}
        </td>
      </tr>
      <tr>
        <th>
          Quantidade:
        <td>
        </th>
          {{ $p->quantidade }}
        </td>
      </tr>
    </table>
  </div>
@stop
