@extends('layouts.merge.site')
@section('titulo', 'Inscrição de Participantes')
@section('content')
    <div id="content" class="site-content">
        <div class="entry-banner onduladaborder">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Inscrição de Participantes</h1>

                    </div>
                </div>
            </div>
        </div>

        <div id="primary" class="content-area event-page-area">
            <div class="container">
                <div class="row py-5 my-5">


                        <div class="col-12">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('site.registration.store') }}"  enctype="multipart/form-data"
                                method="POST" class="popup-form pb-5 mb-5">
                                @csrf
                                @method('POST')

                                <h4 class="my-5">
                                    <b>Dados Pessoais</b>
                                    <hr>
                                </h4>

                                @include('forms._formRegistration.index')

                                <h4 class="mt-5">
                                    <b>Valor da Inscrição</b>
                                    <hr>
                                </h4>
                                <h2>80.000,00 AOA</h2>
                                <div class="col text-center rtin-button mt-5">
                                    <button type="submit" class="btn-fill size-lg border-radius-5 color-primary gust">
                                        Submeter

                                    </button>
                                </div>

                            </form>

                        </div>


                </div>
            </div>
        </div>
    </div>



@endsection
@section('CSS')
    <style>
        .fa.fa-check-circle {
            color: green;
        }

        small {
            font-size: 15px;
        }

        input[type=text],
        input[type=number],
        input[type=date],
        input[type=email],
        input[type=file],
        select,
        textarea {
            height: 55px !important;
            width: 100% !important;
            background-color: rgba(147, 146, 150, 0.1) !important;
            font-size: 14px !important;
            font-style: italic !important;
            font-weight: 500 !important;
            margin-bottom: 15px !important;
            border-radius: 0 !important;
            border: none !important;
            border-bottom: 2px solid #9392961a !important;
        }


        input:hover,
        select:hover,
        textarea:hover {
            border-bottom: 4px solid #9392961a !important;
        }

        input::placeholder,
        select::placeholder,
        textarea::placeholder {
            font-size: 12px !important;
            color: rgb(147, 146, 150) !important;
        }
    </style>


@endsection
@section('JS')


    <input id="code" value="{{ session('create') }}" hidden>
    @if (session('create'))
        <script>
            var key = document.getElementById("code").value;


            Swal.fire({
                icon: 'success',
                title: 'Submetido com sucesso!',
                text: "Para dar continuidade ao processo submetido, clique no botão Pagamento e terá o passo à passo",
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#999',
                cancelButtonText: 'Voltar',
                confirmButtonText: 'Pagamento'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open("http://" + window.location.host + "/participantes/invoice/" + key, '_blank');

                }
            })
        </script>
    @endif


@endsection
