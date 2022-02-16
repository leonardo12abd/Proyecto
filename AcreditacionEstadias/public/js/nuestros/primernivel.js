const url = 'http://localhost:8000'

const rh_map = [
  {name: '', desc_puesto: '', servicio_social: ''}
]

const selectUnidad = async () => {
  const unidad = document.getElementById("clues_id").value;
  console.log({unidad})
  document.getElementById("unidad_id").value = unidad
  const {data} = await fetch(`${url}/api/unidades/${unidad}`).then(res => {
    return res.json()
  })

  document.getElementById("municipio_primer").value = data.clave_municipio
  document.getElementById("juridiccion_primer").value = data.clavejurisdiccion
}

const preloadMap = () => {
  
  const div = document.getElementById("map_rh");
  div.innerHTML = '';
  console.log({})
  rh_map.forEach((rh, index) => {
    div.innerHTML += `
      <div id="rh_${index}" class="row">
        <div class="col-md-4 cols-12">
          <div>Nombre</div>
          <input value="${rh.name}" />
        </div>
        <div class="col-md-4 cols-12">
          <div>Puesto: </div>
          <input value="${rh.desc_puesto}" />
        </div>
        <div class="col-md-4 cols-12">
          <div>Servicio Social: </div>
          <input value="${rh.servicio_social}" />
        </div>
      </div>
    `
  })
}

const addRH = () => {
  console.log('hola button')
  rh_map.push(
    {name: '', desc_puesto: '', servicio_social: ''}
  )
  preloadMap() // Holis :3
}



