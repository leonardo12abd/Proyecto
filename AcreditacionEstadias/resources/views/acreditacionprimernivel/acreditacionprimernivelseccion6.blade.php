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
                                <th scope="col" style="background-color: #E3E3E3"><center> CÉDULA DE MADUREZ MODELO DE GESTIÓN DE CALIDAD</center></th>
                                <th scope="col" style="background-color: #E3E3E3"></th>
                                <th scope="col" style="background-color: #E3E3E3">FEBRERO</th>
                                <th scope="col" style="background-color: #E3E3E3"></th>
                                <th scope="col" style="background-color: #E3E3E3"></th>
                                <th scope="col" style="background-color: #E3E3E3">JUNIO</th>
                                <th scope="col" style="background-color: #E3E3E3"></th>
                                <th scope="col" style="background-color: #E3E3E3"></th>
                                <th scope="col" style="background-color: #E3E3E3">SEPTIEMBRE</th>
                                <th scope="col" style="background-color: #E3E3E3"></th>
                                <th scope="col" style="background-color: #E3E3E3">OBSERVACIONES</th>
                              </tr>
                            </thead>
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col" style="background-color: #888282"></th>
                                  <th scope="col" style="background-color: #888282"><center>PUNTAJE</center></th>
                                  <th scope="col" style="background-color: #888282"><center>CUMPLE</center></th>
                                  <th scope="col" style="background-color: #888282"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #888282"><center>PUNTAJE</th>
                                  <th scope="col" style="background-color: #888282"><center>CUMPLE</th>
                                  <th scope="col" style="background-color: #888282"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #888282"><center>PUNTAJE</center></th>
                                  <th scope="col" style="background-color: #888282"><center>CUMPLE</center></th>
                                  <th scope="col" style="background-color: #888282"><center>NO CUMPLE</center></th>
                                  <th scope="col" style="background-color: #888282"><center>OBSERVACIONES</center></th>
                                </tr>
                              </thead>
                            <tbody>

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
                                <td>Gestor de calidad</td>
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
                                <td>Director del establecimiento</td>
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
                                <td>Responsable estatal de calidad</td>
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
                                <td>Sello del establecimiento</td>
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
                                <td>Nombre del establecimiento </td>
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
                                <td>Fecha de elaboración de la tabla</td>
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
                                <td>Tipo de evaluación(diagnóstica, sumativa, por objetivos, intermedia).</td>
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
                                <td>Equipo calificador(nombres y firmas de colaboradores que apoyaron el llenado de la cédula)</td>
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

                            </tbody>
</div>

@endsection