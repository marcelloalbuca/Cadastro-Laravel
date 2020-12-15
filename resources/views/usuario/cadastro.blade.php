@extends('layout.base')

@section('titulo', 'Cadastro de usuário')

@section('conteudo')

<div class="container">
    <div class="container">
        <center>
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-title"><h3>Usuário</h3></div>
          </div>
          <div style="padding-top:30px" class="panel-body">

            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

            <form action="{{ route('salvar') }}" method="post">
                {{ csrf_field() }}

              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
            
                @if($errors->has('nome'))
                @foreach($errors->get('nome') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
                @endif

                </div>

              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>

                @if($errors->has('email'))
                    @foreach($errors->get('email') as $erro)
                        <strong class="erro">{{ $erro }}</strong>
                    @endforeach
                @endif
            </div>

              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
                @if($errors->has('senha'))
                    @foreach($errors->get('senha') as $erro)
                        <strong class="erro">{{ $erro }}</strong>
                    @endforeach
                @endif
              </div>

              <div style="margin-top:10px" class="form-group">
                <div class="col-sm-12 controls">
                  <input type="submit" name="cadastro" value="Cadastrar" style="padding-right" class="btn btn-success" />
                </div>
              </div>

            </form>
          </div>

          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Deletar</th>
              </tr>
            </thead>
            <tbody>
              <?php
            
                ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="/config/deletar.php?id=">
                      X
                    </a>
                </tr> <?php
       
                      ?>
          </table>
          </tbody>
          </table>
        </div>
      </div>
    </center>
    </div>
  </div>

@endsection