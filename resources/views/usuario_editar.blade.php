@extends('template')

@section('conteudo')
<h1>Alterar usuário</h1>
<form method="POST" action="{{ route('usuario_alterar', ['id' => $u->id]) }}">
	@csrf
	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="f_nome" placeholder="Nome" name="nome" value="{{ $u->nome }}">
	  <label for="f_nome">Nome</label>
	</div>
	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="f_endereco" placeholder="endereço" name="endereco" value="{{ $u->endereco }}">
	  <label for="f_endereco">Endereço</label>
	</div>
	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="f_cidade" placeholder="Cidade" name="cidade" value="{{ $u->cidade }}">
	  <label for="f_cidade">Cidade</label>
	</div>
	<div class="form-floating mb-3">
                                    <select class="form-control" id="f_estado" name="estado" value="{{ $u->estado }}">
                                    <option>AC</option>
                                    <option>AL</option>
                                    <option>AP</option>
                                    <option>AM</option>
                                    <option>BA</option>
                                    <option>CE</option>
                                    <option>DF</option>
                                    <option>ES</option>
                                    <option>GO</option>
                                    <option>MA</option>
                                    <option>MT</option>
                                    <option>MS</option>
                                    <option>MG</option>
                                    <option>PA</option>
                                    <option>PB</option>
                                    <option>PR</option>
                                    <option>PE</option>
                                    <option>PI</option>
                                    <option>RJ</option>
                                    <option>RN</option>
                                    <option>RS</option>
                                    <option>RO</option>
                                    <option>RR</option>
                                    <option>SP</option>
                                    <option>SC</option>
                                    <option>SE</option>
                                    <option>TO</option>
                                    </select>
    </div>
	<input type="submit" class="btn btn-success" value="Cadastrar">
</form>
@endsection('conteudo')