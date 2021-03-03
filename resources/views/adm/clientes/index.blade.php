@extends('layouts.templateAdm')
@section('pageTitle', 'Clientes')
@section('content')

<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Clientes Cadastrados</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Clientes</a></li>
                        <li class="breadcrumb-item active">Listar</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Responsável</th>
                                <th>CNPJ</th>
                                <th>Data em que se tornou cliente</th>
                                <th>Ações</th>
                                
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($clientes as $a)
                            <tr>
                                <td>{{$a->nome}}</td>
                                <td>{{$a->responsavel}}</td>
                                <td>{{$a->cnpj}}</td>
                                <td>{{$a->data}}</td>
                                <td>Editar</td>
                              
                               
                            </tr>
                            @endforeach
                            
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>


@section('js')

<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>

    
@endsection

@endsection