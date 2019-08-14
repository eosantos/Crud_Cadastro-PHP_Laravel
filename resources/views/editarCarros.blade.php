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
                    <form action="{{ route('atualizarCarros') }}" method="post">
                        @csrf

                        <input type="hidden" name="id" value="{{$carros->id}}">

                        <div class="row">
                            <div class="col-12">
                            <label valign="middle" style="font-family: arial ;color:#0A0A2A; font-size:12px;"><b>Modelo:</b></label>
                                <input style="width: 690px;" value="{{$carros->marca}}" name="marca" type="text" class="form-control" placeholder="Digita o modelo do carro">
                            </div>

                        <br>



                        <div class="row" style="padding-left: 15px; padding-top: 10px;">
                            <div class="col-6" align="left">
                            <label valign="middle" style="font-family: arial ;color:#0A0A2A; font-size:12px;"><b>Renavam:</b></label>
                                <input value="{{$carros->renavam}}" name="renavam" type="text" class="form-control" placeholder="000.000.000-00">
                            </div>

                            <div class="col-6" align="left">
                            <label valign="middle" style="font-family: arial ;color:#0A0A2A; font-size:12px;"><b>Placa:</b></label>
                                <input value="{{$carros->placa}}" name="placa" type="text" class="form-control" placeholder="Digite sua Placa">
                            </div>

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
