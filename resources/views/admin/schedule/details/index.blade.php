@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Programa & Actividade')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.schedule.index') }}"><u>Listar Programas & Actividades</u></a> >
                {{ $schedule->program }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">Tema: {{ $schedule->theme }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Programa</b>
                                        </h5>
                                        <p class="text-dark text-justify">
                                            {{ $schedule->program }}
                                        </p>

                                    </div>
                                    @if ($schedule->speaker)
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Orador</b>
                                            </h5>
                                            <p class="text-dark text-justify">
                                                {{ $schedule->speaker }}
                                            </p>

                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Função/Cargo</b>
                                            </h5>
                                            <p class="text-dark text-justify">
                                                {{ $schedule->title }}
                                            </p>

                                        </div>
                                    @endif


                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $schedule->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $schedule->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


@endsection
