@extends('principal')

@section('conteudo')

<div class="container">
  <form action="/produtos/adiciona" method="post">

     <input type="hidden" value="{{{ csrf_token() }}}" name="_token" />

      <div class="form-group">
        <input class="form-control" placeholder="Nome" name="nome" />
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Valor" name="valor" />
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Quantidade" name="quantidade" />
      </div>
      <div class="form-group">
        <textarea class="form-control" placeholder="Descrição" name="descricao"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
</div>


@stop
