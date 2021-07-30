@extends('voyager::master')

@section('page_title', 'Sifarişlər')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
         Ramrent.az Sifarişlər 
        </h1>
        
    </div>
@stop


@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        
                            <div class="row" style="padding: 50px">
                                <div>
                                    <table class="uk-table uk-table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sifarişçi Adı</th>
                                                <th>Telefon Nömrəsi</th>
                                                <th>Sifariş Olunan Maşın</th>
                                                <th>Ödəniş Növü</th>
                                                <th>Sifarişin Statusu</th>
                                                <th>Tarixi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <td>Table Data</td>
                                                <button class="uk-button uk-button-default" type="button" uk-toggle="target: #toggle-usage">Toggle</button>
                                                <p id="toggle-usage">What's up?</p>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                   
                                </div>
                            </div>
               
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> </h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>

@stop