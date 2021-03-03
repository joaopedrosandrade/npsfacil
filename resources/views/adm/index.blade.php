@extends('layouts.templateAdm')
@section('pageTitle', 'Dashboard')
@section('content')


<div class="page-content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">

                @php
                $nome = Auth::user()->name;
                $primeiroNome = explode(" ", $nome);

                @endphp
                <h4 class="page-title mb-0 font-size-18">Olá, {{$primeiroNome[0]}}! QUE BOM TE VER POR AQUI 🤗</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">NPS Fácil 1.1.04 </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                    <i class="mdi mdi-tag-plus-outline"></i>
                                </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16 mt-2">Avaliações</div>
                        </div>
                    </div>
                    <h4 class="mt-4">1,368</h4>
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-0"><span class="text-success mr-2">Mês:  Março </span></p>
                        </div>
                   
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16 mt-2">Clientes</div>

                        </div>
                    </div>
                    <h4 class="mt-4">2,456</h4>
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-0"><span class="text-success mr-2"> Total Cadastrados </span></p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sales Report</h4>

                    <div id="line-chart" class="apex-charts"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Revenue</h4>

                    <div id="column-chart" class="apex-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


  
</div>




@endsection