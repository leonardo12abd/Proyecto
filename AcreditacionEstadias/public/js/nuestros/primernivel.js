const url = 'http://www.acreditacionclues.com/public'

//const url = 'http://localhost:8000'
const rh_map = [
  {name: '', desc_puesto: '', servicio_social: '', carta_asignacion:'', titulo:'', cadula:'', tipo_contratacion:'',
    doc_adscripcion:'', estomatologo_cartilla:'', prev_incendios:'', interculturalidad:'', cuidados_paliativos:'', programa_higiene:'',
    accion_escenciales:'', estomatologo_rcp:'', observaciones:''}
]
var preload = false




const selectUnidad = async ({vista='alta_primer_nivel'}) => {
  console.log('entraste a la funcion select unidad')
  console.log({vista})
  const unidad = document.getElementById("clues_id").value;
  console.log({unidad})
  try {
    const {data} = await fetch(`${url}/api/unidades/${unidad}`).then(res => {
      return res.json()
    })
    if(vista === 'alta_primer_nivel'){
        document.getElementById("id_clues").value = data.id_clues
      document.getElementById("unidad_id").value = data.id_clues
      document.getElementById("municipio_primer").value = data.clave_municipio
      document.getElementById("juridiccion_primer").value = data.clavejurisdiccion
      document.getElementById("tipologia_primer").value = data.id_tipologia
      document.getElementById("estrato_primer").value = data.claveestrato
    }else if(vista === 'alta_primer_nivel_sec_2'){

        document.getElementById("id_clues").value = data.id_clues
      document.getElementById("unidad_id").value = data.id_clues
      document.getElementById("municipio_primer").value = data.clave_municipio
      document.getElementById("juridiccion_primer").value = data.clavejurisdiccion
    }
    else if(vista === 'alta_primer_nivel_sec_3'){
        document.getElementById("unidad_id").value = data.id_clues
        document.getElementById("municipio_primer").value = data.clave_municipio
        document.getElementById("juridiccion_primer").value = data.clavejurisdiccion
      }

    else if(vista === 'alta_primer_nivel_sec_4'){
        document.getElementById("unidad_id").value = data.id_clues
        document.getElementById("municipio_primer").value = data.clave_municipio
        document.getElementById("juridiccion_primer").value = data.clavejurisdiccion
      }
      else if(vista === 'alta_primer_nivel_sec_5'){
        document.getElementById("unidad_id").value = data.id_clues
        document.getElementById("municipio_primer").value = data.clave_municipio
        document.getElementById("juridiccion_primer").value = data.clavejurisdiccion
      }
      else if(vista === 'alta_primer_nivel_sec_6'){
        document.getElementById("unidad_id").value = data.id_clues
        document.getElementById("municipio_primer").value = data.clave_municipio
        document.getElementById("juridiccion_primer").value = data.clavejurisdiccion
      }

    localStorage.setItem('unidadData', JSON.stringify(data))

  } catch (error) {
    console.warn({error})
    if(vista === 'alta_primer_nivel'){
      document.getElementById("unidad_id").value = ''
      document.getElementById("municipio_primer").value = ''
      document.getElementById("juridiccion_primer").value = ''
      document.getElementById("tipologia_primer").value = ''
      document.getElementById("estrato_primer").value = ''
    }else if(vista === 'alta_primer_nivel_sec_2'){
      document.getElementById("unidad_id").value = ''
      document.getElementById("municipio_primer").value = ''
      document.getElementById("juridiccion_primer").value = ''
    }
    localStorage.setItem('unidadData', null)
  }
}
/** */
const preloadMap = () => {

    const tbody = document.getElementById("map_rh");

    tbody.innerHTML = '';
    rh_map.forEach((rh, index) => {
      tbody.innerHTML +=
      `
                              <tbody id="rh_${index}">
                                <tr>

                                  <td>
                                  <input  class="form-control" name="key_13_${index}"   onchange="saveData(${index})" id="name_rh_${index}" value="${preload ? preload[`key_13_${index}`] : ''}" />
                                  </td>

                                  <td>
                                   <input type="text"  class="form-control" name="puesto_key1_${index}"  id="desc_rh_${index}" value="${preload ? preload[`puesto_key1_${index}`] : ''}">
                                  </td>
                                  <td>
                                        <div class="form-check form-check-inline">
                                            <input   type="radio" name="key_0_${index}" id="social_rh_${index}" value="si" ${preload ? preload[`key_0_${index}`] == 'si' ? 'checked' : '' : ''}>
                                            <label class="form-check-label" for="inlineRadio1">SI</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input   type="radio" name="key_0_${index}" id="social_rh_${index}" value="no" ${preload ? preload[`key_0_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                            <label class="form-check-label" for="inlineRadio2">NO</label>
                                        </div>
                                  </td>
                                  <td>
                                        <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_1_${index}" id="titu_rh_${index}" value="si" ${preload ? preload[`key_1_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_1_${index}" id="titu_rh_${index}" value="no" ${preload ? preload[`key_1_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                  </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_2_${index}" id="ced_rh_${index}" value="si" ${preload ? preload[`key_2_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_2_${index}" id="ced_rh_${index}" value="no" ${preload ? preload[`key_2_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                  </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_3_${index}" id="t_contra_rh_${index}" value="si"  ${preload ? preload[`key_3_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_3_${index}"" id="t_contra_rh_${index}" value="no" ${preload ? preload[`key_3_${index}`] == 'no' ? 'checked' : '' : 'checked'}}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                  </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_4_${index}" id="doc_ads_rh_${index}" value="si" ${preload ? preload[`key_4_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_4_${index}" id="doc_ads_rh_${index}" value="no" ${preload ? preload[`key_4_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                  </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                  <input   type="radio" name="key_5_${index}" id="est_cart_rh_${index}" value="si" ${preload ? preload[`key_5_${index}`] == 'si' ? 'checked' : '' : ''}>
                                  <label class="form-check-label" for="inlineRadio1">SI</label>
                                  </div>
                              <div class="form-check form-check-inline">
                                  <input   type="radio" name="key_5_${index}" id="est_cart_rh_${index}" value="no" ${preload ? preload[`key_5_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                  <label class="form-check-label" for="inlineRadio2">NO</label>
                              </div>
                                  </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_6_${index}" id="prev_inc_rh_${index}" value="si" ${preload ? preload[`key_6_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_6_${index}" id="prev_inc_rh_${index}" value="no" ${preload ? preload[`key_6_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                  </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_7_${index}" id="interc_rh_${index}" value="si" ${preload ? preload[`key_7_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_7_${index}" id="interc_rh_${index}" value="no" ${preload ? preload[`key_7_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                        </div>
                                        </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_8_${index}" id="cuid_pas_rh_${index}" value="si" ${preload ? preload[`key_8_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_8_${index}" id="cuid_pas_rh_${index}" value="no" ${preload ? preload[`key_8_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                  </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_9_${index}" id="program_rh_${index}" value="si" ${preload ? preload[`key_9_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input   type="radio" name="key_9_${index}" id="program_rh_${index}" value="no" ${preload ? preload[`key_9_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="form-check form-check-inline">
                                    <input   type="radio" name="key_10_${index}" id="accion_rh_${index}" value="si" ${preload ? preload[`key_10_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_10_${index}" id="accion_rh_${index}" value="no" ${preload ? preload[`key_10_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                  </td>
                                  <td>
                                  <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_11_${index}" id="estomatologo_rcp_rh_${index}" value="si"  ${preload ? preload[`key_11_${index}`] == 'si' ? 'checked' : '' : ''}>
                                        <label class="form-check-label" for="inlineRadio1">SI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input   type="radio" name="key_11_${index}" id="estomatologo_rcp_rh_${index}" value="no"   ${preload ? preload[`key_11_${index}`] == 'no' ? 'checked' : '' : 'checked'}>
                                        <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                  </td>
                                  <td>
                                  <textarea class="form-control" name="key_12_${index}" id="observ_rh_${index}" rows="3">${preload ? preload[`key_12_${index}`]  : ''}</textarea>
                                  </td>
                                  <td><input type="button" class="btn btn-danger" value="Borrar" onclick="deleteCasilla(${index})" /></td>
                                </tr>
                              </tbody>
                              `
    })

  }
const addRH = (bandera) => {
  console.log('holiwis')
  if(bandera){
    var pre = JSON.parse(document.getElementById("rescatar_data_edit_acreditacion_show").value);
    preload = pre.data20
  }
  rh_map.push(
    {name: '', desc_puesto: '', servicio_social: ''}
  )
  preloadMap()
}

const deleteCasilla = (index) => {
  rh_map.splice(index,1)
  preloadMap()
}

const saveData = (index) => {
  console.log({index})
  const name = document.getElementById(`name_rh_${index}`).value
  const desc = document.getElementById(`desc_rh_${index}`).value
  const social= document.getElementById(`social_rh_${index}`).value
  const titu= document.getElementById(`titu_rh_${index}`).value
  const ced= document.getElementById(`ced_rh_${index}`).value
  const t_contra= document.getElementById(`t_contra_rh_${index}`).value
  const doc_ads= document.getElementById(`doc_ads_rh_${index}`).value
  const est_cart= document.getElementById(`est_cart_rh_${index}`).value
  const prev_inc= document.getElementById(`prev_inc_rh_${index}`).value
  const interc= document.getElementById(`interc_rh_${index}`).value
  const cuid_pas= document.getElementById(`cuid_pas_rh_${index}`).value
  const program= document.getElementById(`program_rh_${index}`).value
  const accion= document.getElementById(`accion_rh_${index}`).value
  const estomatologo_rcp= document.getElementById(`estomatologo_rcp_rh_${index}`).value
  const observ= document.getElementById(`observ_rh_${index}`).value

  rh_map[index] = {
    name: name,
    desc_puesto: desc,
    servicio_social:social,
    titulo:titu,
    cedula:ced,
    tipo_contratacion:t_contra,
    doc_adscripcion:doc_ads,
    estomatologo_cartilla:est_cart,
    prev_incendios:prev_inc,
    interculturalidad:interc,
    cuidados_paliativos:cuid_pas,
    programa_higiene:program,
    accion_escenciales:accion,
    estomatologo_rcp:estomatologo_rcp,
    observaciones:observ
  }

}

const sumarr = (index) => {
  const salaespera = parseInt(document.getElementById(`salaespera_${index}`).value || 0)
  const consultorio = parseInt(document.getElementById(`consultorio_${index}`).value || 0)
  const medicina = parseInt(document.getElementById(`medicinaprev_${index}`).value || 0)
  const area = parseInt(document.getElementById(`areaesterilizacion_${index}`).value || 0)
  const estomatologia = parseInt(document.getElementById(`estomatologia_${index}`).value || 0)
  const psicologia = parseInt(document.getElementById(`psicologia_${index}`).value || 0)
  const archivo = parseInt(document.getElementById(`archivo_${index}`).value || 0)
  const farmacia = parseInt(document.getElementById(`farmacia_${index}`).value || 0)
  const otrasareas = parseInt(document.getElementById(`otrasareas_${index}`).value || 0)

  var total_suma =
  salaespera +
  consultorio +
  medicina +
  area +
  estomatologia +
  psicologia +
  archivo +
  farmacia +
  otrasareas

  document.getElementById(`total_${index}`).value =total_suma
}

const sumarr2 = (index) => {
  const fachada2 = parseInt(document.getElementById(`fachada2_${index}`).value || 0)
  const salaespera2 = parseInt(document.getElementById(`salaespera2_${index}`).value || 0)
  const sanitario2 = parseInt(document.getElementById(`sanitario2_${index}`).value || 0)
  const consultorio2 = parseInt(document.getElementById(`consultorio2_${index}`).value || 0)
  const medicina2 = parseInt(document.getElementById(`medicinaprev2_${index}`).value || 0)
  const farmacia2 = parseInt(document.getElementById(`farmacia2_${index}`).value || 0)
  const esterilizacion2 = parseInt(document.getElementById(`esterilizacion2_${index}`).value || 0)
  const otrasareas2 = parseInt(document.getElementById(`otrasareas2_${index}`).value || 0)

  var total_suma2 =
  fachada2 +
  salaespera2 +
  sanitario2 +
  consultorio2 +
  medicina2 +
  farmacia2 +
  esterilizacion2+
  otrasareas2

  document.getElementById(`total2_${index}`).value =total_suma2
}


const exampleJSON = () => {
var data =  {
  id_clues:1,
  tipologia : {
    otra: '',
  },
  estructura_clues: {
    basica_ampliada: 'basica o ampliada',
    estomatologia: 'Si o No',
    rx: 'Si o no',
    psicologia: 'Si o no',
    otros: ''
  }
}
}

const changeEstructuraClue = () => {

    const valida = document.getElementById('estructura_clues1').checked
    if(valida){
      document.getElementById('get_estructura_clues').innerHTML = `
      <div>
      <div class="row">

        <div class="col-3">
<label>Estomatología: </label> <div class="form-check form-check-inline">
    <label class="form-check-label">
      <input name="estomatologia_clues"   type="radio" id="inlineradio1" value="SI"> SI

    </label>
  </div>
  <div class="form-check form-check-inline">
    <label class="form-check-label">
      <input name="estomatologia_clues"   type="radio" id="inlineradio2" value="NO" checked> NO

    </label>
  </div>
</div>
<div class="col-3">
<label>Psicología: </label> <div class="form-check form-check-inline">
    <label class="form-check-label">
      <input name="psicologia_clues"   type="radio" id="inlineradio1" value="SI"> SI

    </label>
  </div>
  <div class="form-check form-check-inline">
    <label class="form-check-label">
      <input name="psicologia_clues"   type="radio" id="inlineradio2" value="NO" checked> NO

    </label>
  </div>
</div>
<div class="col-3">
<label>Trabajo Social: </label> <div class="form-check form-check-inline">
   <label class="form-check-label">
      <input name="trabajo_social_clues"   type="radio" id="inlineradio1" value="SI"> SI

    </label>
  </div>
  <div class="form-check form-check-inline">
    <label class="form-check-label">
      <input name="trabajo_social_clues"   type="radio" id="inlineradio2" value="NO" checked> NO

    </label>
  </div>
</div>

<div class="col-3">
<label>Laboratorio: </label> <div class="form-check form-check-inline">
    <label class="form-check-label">
       <input name="laboratorio_clues"   type="radio" id="inlineradio1" value="SI"> SI
       <span class="form-check-sign">

       </span>
     </label>
   </div>
   <div class="form-check form-check-inline">
     <label class="form-check-label">
       <input name="laboratorio_clues"   type="radio" id="inlineradio2" value="NO" checked> NO
       <span class="form-check-sign">

       </span>
     </label>
   </div>
</div>

<div class="col-3">
<label>RX: </label> <div class="form-check form-check-inline">
    <label class="form-check-label">
       <input name="rx_clues"   type="radio" id="inlineradio1" value="SI"> SI
       <span class="form-check-sign">

       </span>
     </label>
   </div>
   <div class="form-check form-check-inline">
     <label class="form-check-label">
       <input name="rx_clues"  type="radio" id="inlineradio2" value="NO" checked> NO
       <span class="form-check-sign">

       </span>
     </label>
   </div>

</div>
<div class="col-3">
<input type="text" name="otro_clues" id="" class="form-control" placeholder="Otro:">
</div>
      `
    }else{
      // DEJAR VACIO
      document.getElementById('get_estructura_clues').innerHTML =''
    }
  }

//Estructura Real


  const changeEstructuraReal = () => {

    const valida2 = document.getElementById('estructura_real1').checked
    if(valida2){
      document.getElementById('get_estructura_real').innerHTML = `
       <div>
          <div class="row">

            <div class="col-3">
   <label>Estomatología: </label> <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="estomatologia_real"   type="radio" id="inlineradio1" value="SI"> SI

        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="estomatologia_real"   type="radio" id="inlineradio2" value="NO" checked> NO

        </label>
      </div>
</div>
<div class="col-3">
    <label>Psicología: </label> <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="psicologia_real"   type="radio" id="inlineradio1" value="SI"> SI

        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="psicologia_real"   type="radio" id="inlineradio2" value="NO" checked> NO

        </label>
      </div>
</div>
<div class="col-3">
    <label>Trabajo Social: </label> <div class="form-check form-check-inline">
       <label class="form-check-label">
          <input name="trabajo_social_real"   type="radio" id="inlineradio1" value="SI"> SI

        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input name="trabajo_social_real"   type="radio" id="inlineradio2" value="NO" checked> NO

        </label>
      </div>
</div>

<div class="col-3">
    <label>Laboratorio: </label> <div class="form-check form-check-inline">
        <label class="form-check-label">
           <input name="laboratorio_real"   type="radio" id="inlineradio1" value="SI"> SI
           <span class="form-check-sign">

           </span>
         </label>
       </div>
       <div class="form-check form-check-inline">
         <label class="form-check-label">
           <input name="laboratorio_real"   type="radio" id="inlineradio2" value="NO" checked> NO
           <span class="form-check-sign">

           </span>
         </label>
       </div>
</div>

<div class="col-3">
    <label>RX: </label> <div class="form-check form-check-inline">
        <label class="form-check-label">
           <input name="rx_real"   type="radio" id="inlineradio1" value="SI"> SI
           <span class="form-check-sign">

           </span>
         </label>
       </div>
       <div class="form-check form-check-inline">
         <label class="form-check-label">
           <input name="rx_real"  type="radio" id="inlineradio2" value="NO" checked> NO
           <span class="form-check-sign">

           </span>
         </label>
       </div>

</div>
<div class="col-3">
<input type="text" name="otro_real" id="" class="form-control" placeholder="Otro:">
</div>
      `
    }else{
      // DEJAR VACIO
      document.getElementById('get_estructura_real').innerHTML =''
    }
  }
