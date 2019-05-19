<!-- ENLACE A ARCHIVOS JS -->

<!-- jquery -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>

<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>

<!-- Bootstrap 3.3.5 -->
<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- Preloaders -->
<script src="../plugins/Preloaders/jquery.preloaders.js"></script>

<!-- bootstrap-toggle-master -->
<script src="../plugins/bootstrap-toggle-master/doc/script.js"></script>
<script src="../plugins/bootstrap-toggle-master/js/bootstrap-toggle.js"></script>

    <!-- dataTableButtons -->
<script type="text/javascript" src="../plugins/dataTableButtons/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../plugins/dataTableButtons/buttons.flash.min.js"></script>
<script type="text/javascript" src="../plugins/dataTableButtons/buttons.colVis.min.js"></script>
<script type="text/javascript" src="../plugins/dataTableButtons/jszip.min.js"></script>
<script type="text/javascript" src="../plugins/dataTableButtons/pdfmake.min.js"></script>
<script type="text/javascript" src="../plugins/dataTableButtons/vfs_fonts.js"></script>
<script type="text/javascript" src="../plugins/dataTableButtons/buttons.html5.min.js"></script>
<script type="text/javascript" src="../plugins/dataTableButtons/buttons.print.min.js"></script>

<!-- alertify -->
<script type="text/javascript" src="../plugins/alertifyjs/alertify.js"></script>

<!-- Funciones propias -->
<script src="funciones.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/precarga.js"></script>

<script type="text/javascript" src="../plugins/stacktable/stacktable.js"></script> 

<!-- LLAMADAS A FUNCIONES E INICIALIZACION DE COMPONENTES -->
<script>
    $(function () {
        $(".select2").select2();    
    });
    llenar_lista();
    var letra ='<?php echo $opcionMenu; ?>';
	$(document).ready(function() { menuActivo(letra); });
</script>