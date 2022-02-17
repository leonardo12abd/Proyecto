        <div class="card text-white bg-danger" style="max-heigth: 18rem;">
            <center>  
                <h4 class="card-tittle">Acreditación de Primer Nivel</h4>
            </center>

            <input  hidden class="form-control" name="id_primernivel" id="id_primernivel" placeholder="id_primernivel">
            @if ($errors->first('id_primernivel'))
            <p class="text-warning">{{ $errors->first('id_primernivel') }}</p>
            @endif
            <center>
                <label >Fecha de Visita: </label>
                <input type="date" name="fecha_primernivel">
            </center>
        </div>

        <div class="card-body">

            <div class="row">
                <div class="col-3">
                    <input class="form-control" list="datalistOptions" id="clues_id" placeholder="Unidad" onchange="selectUnidad()">
                    <datalist id="datalistOptions">
                    @foreach ( $unidades as $unidad )
                        <option value="{{ $unidad->clues }}" />
                    @endforeach
                    </datalist>
                <!-- <select name="clues" id="clues_id" class="form-control" onchange="selectUnidad()" label="hola">
                    <option selected value="-1">Seleccionar...</option>
                    @foreach ( $unidades as $unidad )
                    <option value="{{ $unidad->id_clues }}"> {{ $unidad->clues  }}</option>
                    @endforeach
                </select> -->
                </div>
                <div class="col-3">
                    <select name="unidad" id="unidad_id" class="form-control" class="form-control"  disabled>
                        <option selected value="-1">Selecciona primero una unidad...</option>
                        @foreach ( $unidades as $unidad )
                            <option value="{{ $unidad->id_clues }}"> {{ $unidad->nombreunidad   }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <select name="municipio_primer" id="municipio_primer" class="form-control"  disabled>
                        <option selected value="-1">Selecciona primero una unidad...</option>
                        @foreach ( $municipios as $municipio )
                            <option value="{{ $municipio->clave_municipio }}"> {{ $municipio->nombremunicipio   }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <select name="juridiccion_primer" id="juridiccion_primer" class="form-control" disabled >
                        <option selected value="-1">Selecciona primero una unidad...</option>
                        @foreach ( $jurisdicciones as $juri )
                            <option value="{{ $juri->clavejuridiccion }}"> {{ $juri->nombrejurisdiccion   }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
