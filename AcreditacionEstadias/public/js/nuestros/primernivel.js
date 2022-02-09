const url = 'http://localhost:8000'
const selectUnidad = async () => {
  const unidad = document.getElementById("unidad_id").value;
  const {data} = await fetch(`${url}/api/unidades/${unidad}`).then(res => {
    return res.json()
  })

  document.getElementById("municipio_primer").value = data.clavemunicipio
  document.getElementById("juridiccion_primer").value = data.clavejurisdiccion

}


