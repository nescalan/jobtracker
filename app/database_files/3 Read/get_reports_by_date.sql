SELECT 
	rep.id AS Visita_No, 
    vis.fecha_ingreso AS Ingreso, 
    vis.hora_ingreso AS Hora_Ingreso,
    con.nombre AS Residente,
    viv.numero_casa AS Vivienda,
    vis.observaciones AS observaciones
FROM reportes rep
INNER JOIN visitas vis ON rep.visita_id = vis.id
INNER JOIN condominos con ON rep.visita_id = con.id
INNER JOIN viviendas viv ON rep.vivienda_id = viv.id
WHERE vis.fecha_ingreso = '2023-05-01';