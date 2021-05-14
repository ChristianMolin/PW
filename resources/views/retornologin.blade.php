@extends('template')

@section('conteudo')
  <h1 class="alert alert-{{ $tipo_resposta }}">{{ $resposta }}</h1>

  @if (session('mensagem'))
    <div class="alert alert-success">
      {{session('mensagem')}}
    </div>
  @endif

  @if ($tipo_resposta == 'success')
  <table class="table">
      <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Endereço</th>
          <th>Cidade</th>
          <th>Estado</th>
          <th>Operações</th>
      </tr>
      @foreach ($usuarios as $u)
      <tr>
          <td>{{ $u->id }}</td>
          <td>{{ $u->nome }}</td>
          <td>{{ $u->endereço }}</td>
          <td>{{ $u->cidade }}</td>
          <td>{{ $u->estado }}</td>
          <td>
            <a 
            href="{{ route('usuario_editar', ['id' => $u->id]) }}" class="btn btn-info">Alterar</a> 

            <a href="{{ route('usuario_excluir', ['id' => $u->id]) }}" onclick="excluir({{ $u->id }})" class="btn btn-danger">Excluir</a>
          </td>
      </tr>
      @endforeach
  <table>
  @endif
  <a href="{{ route('usuario_novo') }}" class="btn btn-primary">Adicionar novo</a>
  <script>
  function excluir(id){
    if(confirm('você deseja realmente excluir o usuário de id: ' + id + '?')){

      location.href = route('usuario_excluir', { id: id });

    }
  }
</script>

@endsection