<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento de Pagamento-{{ $registration->code }}</title>

    <style>
        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .pylarge {
            padding: 0.2px 0:
        }

        * {
            font-size: 10;
        }
    </style>
</head>

<body>

    <header class="col-12 row">



        <small class="text-left mt-2">
            <img src="site/images/logo/logo-colour.png" alt="" width="200px"><br><br>
            Nome: {{ $registration->name }} <br>
            Número de Identificação Fiscal (NIF): {{ $registration->idCard }} <br>
            Empresa/Organização/Ministério: {{ $registration->company }} <br>
            Telefone : {{ $registration->tel }} <br>
            Email : {{ $registration->email }} <br>

        </small>

    </header>
    <section class="col-12 mt-4 my-4">
        <p class="text-center">
            <b>Documento de Pagamento Nº </b>{{ $registration->code }} |
            <b> Data:</b> {{ $registration->created_at }}

        </p>
        <hr class="pylarge bg-dark">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">

                    <th>PRODUTO</th>
                    <th>DESCRIÇÃO</th>
                    <th>VALOR</th>

                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>
                        Credencial de Acesso
                    </td>
                    <td>
                        <small>Inscrição para o acesso ao 1º Fórum de Governança da Internet em Angola</small>
                    </td>

                    <td>
                        {!! number_format(80000, 2, ',', '.') !!} AOA
                    </td>

                </tr>

            </tbody>

        </table>

    </section>
    <section>
        <p>
            <b> PASSO À PASSO PARA O PAGAMENTO:</b>
            <br>

            <br>
            1 - Transferir o valor do credencial de acesso no IBAN  AO06.0040.0000.3428.7536.1014.7;<br>
            2 - A entidade que aparecerá é: <b>"TSYS - PRESTACAO DE SERVIÇOS, (SU), LDA"</b>;<br>

            3 - Após submeter a sua inscrição, terá até 48h para efectuar a transferência, e enviar o comprovativo e
            esta
            guia
            de pagamento para o email <b>"comercial@fgi.ao"</b> . Caso não cumprir este requisito, perderá a
            sua
            vaga.<br>
            4 - A administração do FGI entrará em contacto para a confirmação do credêncial;
        </p>
    </section>

    <footer class="col-12 text-center" id="footer">


        <div class="col-8 text-left">
            <table class="table table-striped">

                <tr>
                    <th>Forma de Pagamento:</th>
                    <td class="text-right">
                        <h5>Transferência Bancária</h5>
                    </td>
                </tr>
                <tr>
                    <th>IBAN:</th>
                    <td class="text-right">
                        <h5>AO06.0040.0000.3428.7536.1014.7</h5>
                    </td>
                </tr>
                <tr>
                    <th>Número de Conta:</th>
                    <td class="text-right">
                        <h5>234287536.10.001</h5>
                    </td>
                </tr>


            </table>

            <hr class="pylarge bg-dark">
            <table class="table table-striped">
                <tr>
                    <th>
                        <h4>Montante:</h4>
                    </th>
                    <td>
                        <h4 class="text-right">
                            {!! number_format(80000, 2, ',', '.') !!} AOA
                        </h4>
                    </td>
                </tr>

            </table>

        </div>


        <small class="text-left text-dark">
            Documento Processado por Computador. <br>

        </small>
        <div class="col-12 text-right">
            <img src="site/images/partners/institucional/infosi.png" width="200">
        </div>


    </footer>

</body>

</html>
