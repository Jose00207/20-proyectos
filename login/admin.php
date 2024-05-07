<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Dane</title>
    <style>
        body{
            background-color: #1C2833;
        }
    </style>
</head>
<body>
    <div class="container py-5">  
        <div class="row justify-content-center">  
            <div class="col-md-5">  
                <div class="card border-primary">  
                    <div class="card-header bg-primary text-white text-center">  
                        <h4 class="card-title text-uppercase">cuestionario</h4>  
                    </div>  
                    <div class="card-body">  
                        <form action="registrar2.php" method="post" class="needs-validation"  novalidate onsubmit="return validarform()">  
                            <div class="mb-2">
                                <script>
                                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                                    var f=new Date();                                    
                                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                    </script>
                            </div>
                            <div class="row">  
                                <div class="col-sm-6 col-md-12 col-xs-12">  
                                    <div class="form-group mb-2">  
                                        <div class="input-group">
                                            <span class="input-group-text">Nombre:</span>
                                            <input type="text" aria-label="First name" id="nombre" name="nombre" class="form-control" required>
                                            <div class="invalid-feedback">  
                                                Ingresar nombre.  
                                            </div>                                            
                                        </div>
                                        <!-- <label for="firstname">Nombre</label>  
                                        <input type="text" id="firstname" placeholder="Nombre" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                          --> 
                                    </div>  
                                </div>  
                                <div class="col-sm-6 col-md-12 col-xs-12">  
                                    <div class="form-group mb-2">  
                                        <div class="input-group">
                                            <span class="input-group-text">Apellido:</span>
                                            <input type="text" aria-label="First name" id="apellido" name="apellido" class="form-control" required>
                                            <div class="invalid-feedback">  
                                                Ingresar apellido.  
                                            </div>                                            
                                        </div>
                                        <!-- <label for="lastname">Apellido</label>  
                                        <input type="text" id="lastname" placeholder=Apellido" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                         -->  
                                    </div>  
                                </div>
                            </div>  
                            <div class="row">  
                                <div class="col-sm-6 col-md-6 col-xs-12">  
                                    <div class="form-group">  
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addon3">Edad:</span>
                                            <input type="number" class="form-control" id="edad" name="edad" maxlength="2" aria-describedby="basic-addon3" required>
                                            <div class="invalid-feedback">  
                                                Ingrese Edad.  
                                            </div>
                                        </div>    
                                    </div>  
                                </div>                                
                                <div class="col-sm-4 col-md-6 col-xs-12">  
                                    <div class="form-group">  
                                        <div class="input-group mb-2">
                                            <label class="input-group-text" for="inputGroupSelect01">Sexo:</label>
                                            <select class="form-select" id="" name="sexo" required>
                                              <option selected disabled value="">seleccionar</option>
                                              <option value="Hombre">Hombre</option>
                                              <option value="Mujer">Mujer</option>                                              
                                            </select>
                                            <div class="invalid-feedback">
                                                Selecciona el sexo.
                                              </div>
                                        </div>
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-12 col-xs-12">  
                                    <div class="form-group"> 
                                        <div class="input-group mb-2">
                                            <span class="input-group-text" id="basic-addon3">Correo:</span>
                                            <input type="email" class="form-control" id="basic-url" name="correo" aria-describedby="basic-addon3" required>
                                            <div class="invalid-feedback">  
                                                Ingrese correo.  
                                            </div>
                                          </div> 
                                        <!-- <label for="email">Correo</label>  
                                        <input type="email" class="form-control" id="email" placeholder="Correo" aria-describedby="inputGroupPrepend" required>  
                                         -->  
                                    </div>  
                                </div>  
                                <div class="col-sm-4 col-md-12 col-xs-12">  
                                    <div class="form-group">  
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon3">Télefono:</span>
                                            <input type="number" pattern="^\d{9}$" class="form-control" id="basic-url" name="telefono" aria-describedby="basic-addon3" required>
                                            <div class="invalid-feedback">  
                                                Ingrese numero telefono.  
                                            </div>
                                          </div>
                                        <!-- <label for="phonenumber">Teléfono</label>  
                                        <input type="tel"  class="form-control" id="phonenumber" placeholder="Número telefono" aria-describedby="inputGroupPrepend" required>  
                                          --> 
                                    </div>  
                                </div>  
                            </div>  
                            <div class="row">  
                                <div class="col-sm-12 col-md-12 col-xs-12 text-center">  
                                    <div class="float-right">  
                                        <button class="btn btn-danger rounded-0" type="reset">Limpiar</button>  
                                        <button class="btn btn-primary rounded-0" type="submit">Registrar</button>  
                                    </div>                            
                                </div>  
                            </div>  
                        </form>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="javascript/scriptb.js"></script>
    <script src="javascript/validate.js"></script>
</body>
</html>