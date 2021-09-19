<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    


    <link rel="stylesheet" href="_css/bundle/dataTable.css">
    <link rel="stylesheet" href="_css/bundle/buttons.dataTables.min.css">


    

</head>
<body>

<div id="pallet">

<h2>Registration</h2>



<!-- <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Speciality</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Speciality</th>
            </tr>
        </tfoot>
    </table>
<hr>
    <h2>Login</h2>
    <table id="example1" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
            </tr>
        </tfoot>
    </table> -->
  


</div>

<script>

$(document).ready(function(){
    
    $("#pallet").hide();
    document.getElementById('pallet').innerHTML = '<table id="example" class="display" style="width:100%"><thead><tr><th>Name</th><th>Mobile</th><th>Email</th><th>Speciality</th></tr></thead> <tfoot>   <tr>       <th>Name</th>       <th>Mobile</th>       <th>Email</th>       <th>Speciality</th>   </tr> </tfoot>  </table<hr> <h2>Login</h2> <table id="example1" class="display" style="width:100%">   <thead>   <tr>   <th>Name</th>    <th>Mobile</th>  </tr>  </thead>   <tfoot>    <tr>     <th>Name</th>       <th>Mobile</th>      </tr>    </tfoot>  </table>';
});



</script>


<script src="js/user.js"></script>

<script>showData()</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>


</body>
</html>