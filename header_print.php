<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- code untuk link ke css folder -->
    <link rel="stylesheet" href="style1.css"> <!-- code untuk link ke css folder -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Etugas</title>
    <!--bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables\css\dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <!-- bootstrap untuk icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    
    
    <style>
        a.print_link { 
            display: inline-block; 
            padding: 5px 10px; 
            border-radius: 3px; 
            background-color: ; 
            color: blanchedalmond; 
            transition: all 0.2s ease-in-out; 
        } 
        a.print_link:hover { 
            background-color: #ffffff; 
            color: #b95d6a; 
        } 
    </style>
    <style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>


     <!--datables and JQuery js -->
     <script type="text/javascript" language="javascript" src="jquery\jquery-3.6.1.js"></script>
	<script src="DataTables\js\jquery.dataTables.min.js"></script>
    <script src="DataTables\js\dataTables.bootstrap5.min.js"></script>
    <script src="bootstrap\js\bootstrap.bundle.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="http://datatables.net/tn/3"></script>
    
    
    <!-- datatables script -->
    <!-- <script>
    $(document).ready(function () {
        $('#example').DataTable({
            order: [[0, 'desc']],
        });
    });
    </script> -->

<!-- datatables script -->
<script>
        $(document).ready(function() {
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
    </script>