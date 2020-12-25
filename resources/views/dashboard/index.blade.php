@extends('layouts.master')
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <link href="{{ URL::asset('assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css')}}" rel="stylesheet"
          type="text/css"/>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Bem Vindo ao Painel Admin do M-Pesa self-registration portal
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Utilizadores Registados</h4>


                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Apelido</th>
                                <th>Data de Nascimento</th>
                                <th>Celular</th>
                                <th>Tipo de Documento</th>
                                <th>Número de Documento</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->surname }}</td>
                                    <td>{{ $client->date_birth }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->id_type }}</td>
                                    <td>{{ $client->id_number }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div> <!-- end row -->
    </div> <!-- container-fluid -->
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>


    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('assets/pages/datatables.init.js')}}"></script>

@endsection
