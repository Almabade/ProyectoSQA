<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registrar Observaciones</title>
        <link rel="shortcut icon" href="..\Imagenes\logo.png" type="image/x-icon">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="assets/css/InasistenciasAlumno.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/sidebar.css">
    </head>

    
<body>          
    <?php require_once('includes/sidebar_padre.php') ?>
    <div class="container m-6 p-5 mt-5">
        <h2>INASISTENCIAS </h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive" style="overflow: auto;">                            
                                    <table class="table user-list">
                                        <thead>
                                            <tr>
                                            <th ><span>CURSO</span></th>
                                            <th ><span>FECHA</span></th>                         
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 style="color: #718096; line-height: 140%; font-size: 20px;">Matemática</h5>                                                    
                                                    <span class="user-subhead" style="color: #A0AEC0; line-height: 150%;">Horario: 4PM - 5PM</span>
                                                </td>
                                                <td class="text-left" style="color: #2D3748">
                                                    <h5>15 / 07 / 2021</h5>                                                        
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h5 style="color: #718096; line-height: 140%; font-size: 20px;">Matemática</h5>                                                    
                                                    <span class="user-subhead" style="color: #A0AEC0; line-height: 150%;">Horario: 4PM - 5PM</span>
                                                </td>
                                                <td class="text-left" style="color: #2D3748">
                                                    <h5>15 / 07 / 2021</h5>                                                        
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        
                                    </table>
                           
                                </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
    <script src="assets/js/sidebar.js"></script>

</body>
    </html>
    
    