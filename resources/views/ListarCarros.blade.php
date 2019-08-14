<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="jquerymask/jquery.inputmask.js"></script>
        <link href="/fontawesome/css/all.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                <table width="1110" height="70" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0A0A2A" style="padding-top: 10px;">
                    <tr>
                        <td>
                            <img src="logo.png" alt="" border="0" style="display:block;" />
                        </td>
                        <td align="CENTER" valign="middle">
                            <font face=Calibri style="color:#BDBDBD; font-size:18px;">
                                <i><b>LISTA DE AUTOMÓVEIS</b></i>
                            </font>
                        </td>
                    </tr>
                </table>
                </div>
            </div>

            <div class="row">
                <div class="col text-center" style="padding-top: 10px;">

                    <table align="center" class="table table-hover table-striped" id="listar">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Renavam</th>
                            <th scope="col">Placa</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                            @foreach($carros as $carro)
                            <tr>
                            <th scope="row">{{$carro->id}}</th>
                                <td>
                                    {{ $carro->marca }}
                                </td>
                                <td>
                                    {{ $carro->renavam }}
                                </td>
                                <td>
                                    {{ $carro->placa }}
                                </td>
                                <td>
                                    <a href="/editarCarros/{{ $carro->id }}"><i style="color: #0A0A2A" class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="/deleteCarros/{{ $carro->id }}"><i style="color: #FF6347" class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>

                            @endforeach
                    </table>

                    <div class='col-lg-12'>

                        <a href="/home" class="btn btn-dark btn-custom">
                            <span class="fas fa-arrow-left btn-dark"></span> &nbsp;Voltar
                        </a>
                        <a href="/criarCarros" class="btn btn-dark btn-custom">
                            Cadastrar &nbsp;<span class="fas fa-save btn-dark"></span>
                        </a>

                    </div>

                </div>
            </div>
        </div>

        <footer>

            <div id="col2" align="center" class="footer" style="font-size: 13px; padding-top: 10px; padding-bottom: 10px; position:absolute; bottom:0; width:100%; color: #fff; background: #0A0A2A;">
                Copyright © 2019 | Eduardo Oliveira
            </div>

            <script src="../resources/js/jquery.js"></script>
            <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready( function () {
                    $('#listar').DataTable();
                    $('#listarCarros').DataTable();
                } );
            </script>


        </footer>
    </body>

</html>
