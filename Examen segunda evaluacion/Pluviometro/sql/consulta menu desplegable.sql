SELECT column_name columna, SUBSTRING( COLUMN_NAME, 6, LENGTH( column_name ) ) ano
FROM INFORMATION_SCHEMA.COLUMNS
WHERE table_name =  'tabla'
AND table_schema =  'precipitaciones_mes_ano'
AND column_name LIKE  'c%'
LIMIT 0 , 30