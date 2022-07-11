<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.js"></script>
    <title>Insertar</title>
</head>
<body class="bg-body">
    <form method="POST" action="acciones_asesor.php" style="width: 800px; margin: 30px auto; padding: 20px 20px;">
        <button type='button'  class="btn btn-outline-success m-4 mb-0 mx-0" onclick= window.location.href='../../index.html'> 
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="70" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
            </svg>
        </button>
        <h1 class='text-center'>DATOS DEL ASESOR</h1>
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value="insertar"></input>
        
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">N° DOCUMENTO</label>
            <div class="col-sm-8">
                <input type="text" class="form-control bg-light" name="inNdocAsesor" required="required"></input>
            </div>    
        </div>
            
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">NOMBRES Y APELLIDOS COMPLETOS</label>
            <div class="col-sm-8">
                <input type="text" class="form-control bg-light" name="inNombreAsesor"></input>
            </div>
        </div>
            
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">FECHA DE NACIMIENTO</label>
            <div class=col-sm-8>
                <input type="date" class="form-control bg-light" name="inFechNacAsesor"></input>
            </div>
        </div>

        <div class="form-group row mt-3">
        <label class="col-sm-3 col-form-label col-form-label-sm">DIRECCION DE VIVIENDA</label>
            <div class=col-sm-8>
                <input type="text" class="form-control bg-light" name="inViviendaAsesor"></input> 
            </div>
        </div>

        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">ESTRÁTO SOCIAL</label>
            <div class="col-sm-2">
                <input type="number" class="form-control bg-light" max="6" min="1" name="inEstratoAsesor"></input>
            </div>
        </div>
            
        <div class="form-group row mt-3">
        <label class="col-sm-3 col-form-label col-form-label-sm">CORREO EMPRESARIAL</label>
        <div class=col-sm-8>
            <input type="email" class="form-control bg-light" name="inCorreoAsesor"></input>
        </div>
        <div class="form-group row mt-5">
            <button type="submit" class="btn btn-outline-secondary text-dark w-50" style="margin-left: 26%"><b>INSERTAR</b></input>   
        </div>
    </form>
</body>
</html>