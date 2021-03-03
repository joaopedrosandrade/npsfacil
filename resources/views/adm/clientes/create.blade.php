@extends('layouts.templateAdm')
@section('pageTitle', 'Cadastrar Cliente')
@section('content')


<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Cadastrar Cliente</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Clientes</a></li>
                        <li class="breadcrumb-item active">Cadastrar</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            {{session('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cadastre um cliente</h4>
                    <p class="card-title-desc"><small class="text-danger">*</small> Campos obrigatórios</p>
                    <form action="{{route('cliente.store')}}" class="needs-validation"  method="POST"   novalidate>
                        @csrf
                   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom01">Nome da Empresa<small class="text-danger">*</small></label>
                                    <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Razão Social ou Nome Fantasia"   required>
                                    <div class="invalid-feedback">
                                        Digite um nome válido
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom02">Nome do Responsável<small class="text-danger">*</small></label>
                                    <input type="text" name="responsavel" class="form-control" id="validationCustom02"   required>
                                    <div class="invalid-feedback">
                                        Digite um nome válido
                                    </div>
                                </div>
                            </div>                           
                        </div>





                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom03">CNPJ</label>
                                    <input id="input-mask" name="cnpj" class="form-control input-mask" data-inputmask="'mask': '99.999.999/9999-99'">
                                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom04">Data em que se tornou cliente</label>
                                    <input id="input-mask" name="data" class="form-control input-mask" data-inputmask="'mask': '99/99/9999'">
                                 
                                </div>
                            </div>
                            
                        </div>
                     
                        
                        <button class="btn btn-primary" type="submit">Salvar Cliente</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        
        <!-- end col -->
    </div>
    <!-- end row -->
   

</div>


@endsection