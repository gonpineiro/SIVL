SELECT p.name,e.name, a.temperatura, a.humedad, s.valor, a.estado_luz,
TO_DAYS(NOW()) - TO_DAYS(P.created_at) as Dias
FROM prototypes AS p
JOIN ambientes as a	ON p.ambiente_id= a.id
JOIN sensors as s ON p.sensor_id= s.id
JOIN especies as e ON p.especie_id= e.id;
