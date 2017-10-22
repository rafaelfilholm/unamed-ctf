@extends('layout.user')
@section('title', 'UnameCTF - ScoreBoard')
@section('score', 'active')
@section('conteudo')
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-lg-12 col-md-6 col-lg-6">
      <h2 class="text-center page-title">
        Scoreboard
      </h2>
      <div class="espacos"></div>
      <table class="table table-responsive table-bordered table-condensed table-hover">
        <thead>
          <td class="table-body-dark" align="center">
            <h3>Colocação</h3>
          </td>
          <td class="table-body-dark" align="center">
            <h3>Nome do Time</h3>
          </td>
          <td class="table-body-dark" align="center">
            <h3>Pontuação</h3>
          </td>
          <td class="table-body-dark" align="center">
            <h3>Avatar</h3>
          </td>
        </thead>
        @for ($i=0; $i < 10; $i++)
          <tbody class="table-hover">
            <td align="center" class="table-body-transparent">#0000</td>
            <td align="center" class="table-body-transparent">
              <a href="http://google.com">RedHood</a>
            </td>
            <td align="center" class="table-body-transparent">10000</td>
            <td align="center" class="table-body-transparent">
              <img src="https://s-media-cache-ak0.pinimg.com/736x/da/df/6a/dadf6a20353342886904afc6af052b3a--for-cats-ironman.jpg" class="img-responsive" width="32px">
            </td>
          </tbody>
        @endfor
      </table>
    </div>
    <div class="col-xs-12 col-lg-12 col-md-6 col-lg-6">
      <h2 class="text-center page-title">
        Challenges
      </h2>
      <div class="espacos"></div>
      <table class="table table-responsive table-bordered table-condensed table-hover">
        <thead>
          <td class="table-body-dark" align="center">
            <h3>Categoria</h3>
          </td>
          <td class="table-body-dark" align="center">
            <h3>Questão</h3>
          </td>
          <td class="table-body-dark" align="center">
            <h3>Pontuação</h3>
          </td>
          <td class="table-body-dark" align="center">
            <h3>Solvers</h3>
          </td>
        </thead>
        @for ($i=0; $i < 10; $i++)
          <tbody class="table-hover">
            <td align="center" class="table-body-transparent">Forense</td>
            <td align="center" class="table-body-transparent">Who is Next?</td>
            <td align="center" class="table-body-transparent">
              70
            </td>
            <td align="center" class="table-body-transparent">
              <p>
                <a href="http://google.com">RedHood</a><br />
                <a href="http://google.com">RedHood</a><br />
                <a href="http://google.com">RedHood</a>
              </p>
            </td>
          </tbody>
        @endfor
      </table>
    </div>
  </div>
</div>