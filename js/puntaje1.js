$(document).ready(function() {    
    $('#tabladatos').DataTable({
    //para cambiar el lenguaje a español
    'pageLength': 3,
    // "order":[[1, "desc"]],
            language: {
            searchPlaceholder: "  Buscar mi puntaje...",
            "decimal":        "",
            "emptyTable":     "No hay datos",
            "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
            "infoFiltered":   "(Filtro de _MAX_ total registros)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Mostrar _MENU_ registros",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search":         "",
            "zeroRecords":    "No se encontraron coincidencias",
            "paginate": {
                "first":      "Primero",
                "last":       "Ultimo",
                "next":       "Próximo",
                "previous":   "Anterior"
            },
            "aria": {
                "sortAscending":  ": Activar orden de columna ascendente",
                "sortDescending": ": Activar orden de columna desendente"
            },
              },
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'csvHtml5',
                    text:   '<i class="fa-duotone fa-file-csv ta"></i>',
                    titleAttr: 'Exportar a CSV',
                    className: 'btn csv'
                },
                {
                    extend: 'excelHtml5',
                    text:   '<i class="fa-duotone fa-file-excel ta"></i>',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn excel'
                },
                {
                    extend: 'pdfHtml5',
                    text:   '<i class="fa-duotone fa-file-pdf ta"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn pdf'
                }
            ]
    });
});