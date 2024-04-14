<link rel="stylesheet" href="<?php echo base_url() . 'css/datatables/dataTables.semanticui.min.css' ?>">
<!-- Datatable-->
<script type="text/javascript" src="<?php echo base_url() . "js/datatables/jquery.dataTables.min.js" ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "js/datatables/dataTables.semanticui.min.js" ?>"></script>
<!-- Datatable-->        
<script>
$(document).ready(function() {
    $('#example').DataTable({
    	"iDisplayLength": 30,
    	"bLengthChange": false,
    	searching: false, paging: false,info: false
    });
} );
</script>