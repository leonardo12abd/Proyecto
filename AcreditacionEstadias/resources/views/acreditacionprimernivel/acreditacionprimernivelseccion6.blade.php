@extends('layouts.app')

@section('content')

<div class="content">
    <form action="#" method="POST">
        {{ csrf_field() }}

        <div class="container-fluid">
        <div class="row">


                <div class="card">
                        <div class="card text-white bg-secondary" style="max-heigth: 18rem;">
                            <center>
                              <h4 class="card-tittle">APOYOS E INCENTIVOS</h4>
                            </center>
                        </div>


                        {{-- Inicia la primer Seccion --}}
                    <div class="card-body">
                        <table class="table">
                        <thead class="thead-dark">
                              <tr>
                                <th scope="col" style="background-color: #AEB6BF"><center> CÉDULA DE MADUREZ MODELO DE GESTIÓN DE CALIDAD</center></th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF">FEBRERO</th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF">JUNIO</th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF">SEPTIEMBRE</th>
                                <th scope="col" style="background-color: #AEB6BF"></th>
                                <th scope="col" style="background-color: #AEB6BF">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col" style="background-color: #D6DBDF"></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>PUNTAJE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>PUNTAJE</th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>CUMPLE</th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>PUNTAJE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #D6DBDF"><center>OBSERVACIONES</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($apoyos as $key => $apo)
                                <tr>
                                    <th scope="row">{{$apo->nombre_apoyos}}</th>
                                    <td>
                                        <input type="text" name="puntaje_0_{{$key}}"  required>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_0_{{$key}}" value="Si" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_0_{{$key}}" checked value="No" required>
                                    </td>
                                    <td>
                                        <input type="text" name="puntaje_1_{{$key}}"  required>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_1_{{$key}}" value="Si" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_1_{{$key}}" checked value="No" required>
                                    </td>
                                    <td>
                                        <input type="text" name="puntaje_2_{{$key}}"  required>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_2_{{$key}}" value="Si" required>
                                    </td>
                                    <td>
                                        <input type="radio" name="key_2_{{$key}}" checked value="No" required>
                                    </td>
                                    <td>
                                        <textarea class="form-control" name="textarea_{{$key}}" rows="1" cols="10"></textarea>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                            <!--<tbody>

                                <tr>
                                    <td>Cuenta con cédula de madurez MGC</td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>

                                <tr>
                                    <td>Cuenta con firmas:</td>
                                    <td><input disabled class="form-control" type="text"></td>
                                    <td><center><input disabled type="radio" class="form-check-input"></center></td>
                                    <td><center><input disabled type="radio" class="form-check-input"></center></td>
                                    <td><input disabled class="form-control" type="text"></td>
                                    <td><center><input disabled type="radio" class="form-check-input"></center></td>
                                    <td><center><input disabled type="radio" class="form-check-input"></center></td>
                                    <td><input disabled class="form-control" type="text"></td>
                                    <td><center><input disabled type="radio" class="form-check-input"></center></td>
                                    <td><center><input disabled type="radio" class="form-check-input"></center></td>
                                    <td><textarea disabled class="form-control"></textarea></td>
                                </tr>

                                <tr>
                                    <td colspan="2" >Gestor de calidad</td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" >Director del establecimiento</td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" >Responsable estatal de calidad</td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" >Sello del establecimiento</td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" >Nombre del establecimiento </td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" >Fecha de elaboración de la tabla</td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" >Tipo de evaluación(diagnóstica, sumativa, por objetivos, intermedia).</td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" >Equipo calificador(nombres y firmas de colaboradores que apoyaron el llenado de la cédula)</td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><input class="form-control" type="text"></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><center><input type="radio" class="form-check-input"></center></td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>

                            </tbody>-->
                    </div>

@endsection
