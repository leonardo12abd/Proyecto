const url = 'http://localhost:8000'

const rh_map = [
  {name: '', desc_puesto: '', servicio_social: ''}
]

const selectUnidad = async () => {
  const unidad = document.getElementById("clues_id").value;
  console.log({unidad})
  try {
    const {data} = await fetch(`${url}/api/unidades/${unidad}`).then(res => {
      return res.json()
    })
    document.getElementById("unidad_id").value = data.id_clues
    document.getElementById("municipio_primer").value = data.clave_municipio
    document.getElementById("juridiccion_primer").value = data.clavejurisdiccion
  } catch (error) {
    console.warn({error})
    document.getElementById("unidad_id").value = ''
    document.getElementById("municipio_primer").value = ''
    document.getElementById("juridiccion_primer").value = ''
  }
}

const preloadMap = () => {
  const div = document.getElementById("map_rh");

  div.innerHTML = '';
  rh_map.forEach((rh, index) => {
    div.innerHTML += `
      <div id="rh_${index}" class="row">
        <div class="col-md-3 cols-12">
          <div>Nombre</div>
          <input value="${rh.name}" onchange="saveData(${index})" id="name_rh_${index}" />
        </div>
        <div class="col-md-3 cols-12">
          <div>Puesto: </div>
          <input value="${rh.desc_puesto}" id="desc_rh_${index}" onchange="saveData(${index})"/>
        </div>
        <div class="col-md-3 cols-12">
          <div>Servicio Social: </div>
          <input value="${rh.servicio_social}" id="social_rh_${index}" onchange="saveData(${index})" />
        </div>
        <div class="col-md-3 cols-12">
          <input type="button" value="Borrar" onclick="deleteCasilla(${index})" />
        </div>
      </div>
    `
  })

}

const addRH = () => {
  rh_map.push(
    {name: '', desc_puesto: '', servicio_social: ''}
  )
  preloadMap() // Holis :3
}

const deleteCasilla = (index) => {
  rh_map.splice(index,1)
  preloadMap()
}

const saveData = (index) => {
  const name = document.getElementById(`name_rh_${index}`).value
  const desc = document.getElementById(`desc_rh_${index}`).value
  const social= document.getElementById(`social_rh_${index}`).value
  rh_map[index] = {
    name: name,
    desc_puesto: desc,
    servicio_social:social
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



