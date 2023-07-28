import jsPDF from 'jspdf';

// Función para generar el PDF
function generarPDF() {
  // Obtener el canvas del gráfico
  const canvas = document.getElementById('graficaBarras');

  // Crear un objeto de tipo jspdf
  const doc = new jsPDF();

  // Convertir el canvas a imagen (base64)
  const canvasImg = canvas.toDataURL('image/png');

  // Agregar la imagen al documento PDF
  doc.addImage(canvasImg, 'PNG', 10, 10, 190, 100); // Puedes ajustar las coordenadas y el tamaño de la imagen en el PDF

  // Guardar el PDF con un nombre específico (por ejemplo, 'reporte.pdf')
  doc.save('reporte.pdf');
  console.log('esas en jspdf')
}

// Exportar la función para que esté disponible en otros archivos
export { generarPDF };
