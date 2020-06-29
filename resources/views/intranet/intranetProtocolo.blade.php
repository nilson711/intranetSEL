@extends('layouts.mainIntranetProtocolo')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="modalDetalhesProtocolo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Detalhes do Protocolo</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6><strong>Nº Protocolo: 100000.2020</strong></h6>
                    <h6>Data: 04/02/2020 </h6>
                    <h6>Assunto: Bolsa Atleta </h6>
                    <h6>Status: Concedido </h6>
                    <p>Observações: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
{{--                    <button type="button" class="btn btn-primary">Sim</button>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL FIM-->

    <h3>Olá Servidor!</h3>
    <p>Seja bem vindo a INTRANET da Secretaria de Estado de Esporte e Lazer do Distrito Federal.</p>
    <p>Aqui você terá todas as ferramentas para auxiliá-lo no seu trabalho.</p>
    <hr>
    <h4>Protocolos pendentes</h4>

    <table class="table table-striped" style="font-size: 9pt">
        <thead>
        <tr>
            <th scope="col">Nº Protocolo</th>
            <th scope="col">Data</th>
            <th scope="col">Assunto</th>
            <th scope="col">Status</th>
            <th scope="col">Detalhes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">100000.2020</th>
            <td>04/02/2020</td>
            <td>Bolsa Atleta</td>
            <td><i class="menu-icon fa fa-check" title="Aprovado"></i></td>
            <td>
                <button type="button-pr" class="btn btn-primary btn-sm no-border" data-toggle="modal" data-target="#modalDetalhesProtocolo">Detalhes</button>
            </td>
        </tr>
        <tr>
            <th scope="row">001994.2020</th>
            <td>25/03/2020</td>
            <td>Espaço para Evento</td>
            <td><i class="menu-icon fa fa-search" title="Em análise"></i></td>
            <td>
                <button type="button-pr" class="btn btn-primary btn-sm no-border" data-toggle="modal" data-target="#modalDetalhesProtocolo">Detalhes</button>
            </td>
        </tr>
        <tr>
            <th scope="row">000054.2020</th>
            <td>30/04/2020</td>
            <td>Prestação Contas</td>
            <td><i class="menu-icon fa fa-ban" title="Negado"></i></td>
            <td>
                <button type="button-pr" class="btn btn-primary btn-sm no-border" data-toggle="modal" data-target="#modalDetalhesProtocolo">Detalhes</button>
            </td>
        </tr>
        </tbody>
    </table>

@endsection

//===29/06===//