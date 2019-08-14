<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="jquerymask/jquery.inputmask.js"></script>
    </head>

    <body>
        <br><br>
        <table width="720" height="70" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0A0A2A">
            <tr>
                <td align="left" valign="middle" style="padding-left: 10px;">
                    <font face=Calibri style="color:#BDBDBD; font-size:18px;">
                        <i><b>Preencha com suas informações pessoais</b></i>
                    </font>
                </td>
            </tr>
        </table>


        <table width="720" height="350" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E6E6E6">
            <tr align="left" valign="top">
                <td style="padding-left: 15px; padding-top: 15px;">
                    <form action="{{ route('atualizar') }}" method="post">
                        @csrf

                        <input type="hidden" name="id" value="{{$pessoas->id}}">

                        <div class="row">
                            <div class="col-4">
                            <label valign="middle" style="font-family: arial ;color:#0A0A2A; font-size:12px;"><b>Nome:</b></label>
                                <input name="nome" value="{{$nome}}" type="text" class="form-control" placeholder="Primeiro Nome">
                            </div>

                            <div class="col-8" align="left">
                            <label valign="middle" style="font-family: arial ;color:#0A0A2A; font-size:12px;"><b>Sobrenome:</b></label>
                                <input style="width:445px;" name="sobrenome"  value="{{$sobrenome}}" type="text" class="form-control" placeholder="Sobrenome">
                            </div>
                        </div>

                        <br>



                        <div class="row">
                            <div class="col-3" align="left">
                            <label valign="middle" style="font-family: arial ;color:#0A0A2A; font-size:12px;"><b>CPF:</b></label>
                                <input name="cpf" value="{{$pessoas->cpf}}" type="text" class="form-control" placeholder="000.000.000-00">
                            </div>

                            <div class="col-3">
                            <label valign="middle" style="font-family: arial ;color:#0A0A2A; font-size:12px;"><b>Data de Nascimento:</b></label>
                                <input name="dt_nasc" value="{{$pessoas->dt_nasc}}" type="text" class="form-control" placeholder="__/__/____">
                            </div>

                            <div class="col-6">
                            <label valign="middle" style="font-family: arial ;color:#0A0A2A; font-size:12px;"><b>Telefone:</b></label>
                                <input style="width:320px;" name="telefone" value="{{$pessoas->telefone}}" type="text" class="form-control" placeholder="Telefone">
                            </div>

                        </div>


                            <div align="center" style="padding-top: 50px;">
                                <input style="width: 200px;" class="btn btn-dark" type="submit" value="Atulizar">
                            </div>

                    </form>
                </td>
            </tr>
        </table>

        <div id="col2" align="center" class="footer" style="font-size: 13px; padding-top: 10px; padding-bottom: 10px; position:absolute; bottom:0; width:100%; color: #fff; background: #0A0A2A;">
            Copyright © 2019 | Eduardo Oliveira
        </div>

    </body>

</html>
