set terminal png size 600
set output "pruebas_carga.png"
set title "100 peticiones, 20 usuarios concurrentes"
set size ratio 0.6
set grid y
set xlabel "peticiones"
set ylabel "tiempo de respuesta (ms)"
plot "resutados.csv" using 9 smooth sbezier with lines title "gutl.jovenclub.cu"