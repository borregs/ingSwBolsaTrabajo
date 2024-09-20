<?php
include "./dbconect.php";
?>
<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="./scripts.js"></script>
        <link rel="icon" href="./icon.png">
        <link rel="stylesheet" href="./styles.css">
        <title>Reportes</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <div>
            <div class="container">
                <img id="branding" class="inline-block" src="./icon.png"/>
                <h3 class="title inline">   
                        <div class="inline-block formato">Reportes</div>
                </h3>
            </div>
            <nav class="navbar navbar-light fs-4 mb-5 justify-content-center inline">
                <div class="flexbox">
                    <a href="./index.php" ><div class="inline-block nav-itm">Bolsa de Trabajo</div></a>
                    <a href="./report.php"><div class="inline-block selected nav-itm">Reportes</div></a>
                    <div class="inline-block nav-itm">Bolsa de Trabajo</div>
                    <div class="inline-block nav-itm">Bolsa de Trabajo</div>
                    <div class="inline-block nav-itm">Bolsa de Trabajo</div>
                </div>
            </nav>
            <div class="">
                <div id="tablaSolic">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                            <th scope="col">#NoCtrl</th>
                            <th scope="col">Nombre</th>
                            <th scope='col'>sexo</th>
                            <th scope='col'>edad</th>
                            <th scope='col'>experiencia</th>
                            <th scope='col'>perfil</th>
                            <th scope='col'>escolaridad</th>
                            <th scope='col'>telefono</th>
                            <th scope='col'>rfc</th>
                            <th scope='col'>nss</th>
                            <th scope='col'>estado civil</th>
                            <th scope='col'>fecha de ingreso</th>
                            <th scope='col'>comentarios</th>
                            <th scope='col'>Estado</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql="SELECT bolsa.NoCtrl, experiencia.ExpDesc, perfil.perfil, bolsa.Nombre, bolsa.ApPat, bolsa.ApMat, bolsa.Sexo, bolsa.FechNac, bolsa.School, bolsa.Tel, bolsa.RFC,bolsa.NSS,bolsa.EdoCiv,bolsa.FechIn,bolsa.Com,bolsa.Stat FROM `experiencia` JOIN `exp2solic` ON experiencia.ExpID = exp2solic.expId JOIN `perf2solic` ON exp2solic.noctrl = perf2solic.noctrl JOIN `perfil` ON perf2solic.perfID = perfil.idPerf JOIN `bolsa` ON perf2solic.noctrl = bolsa.NoCtrl; ";
                                //$sql = "SELECT * FROM `bolsa`";
                                $result = mysqli_query($conn,$sql);

                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                        <tr>
                                        <td><?php echo $row['NoCtrl']?></td>
                                        <td id="nombreField"><?php echo $row['Nombre'].$row['ApPat'].$row['ApMat']?></td>
                                        <td id="SexoField"><?php echo $row['Sexo']?></td>
                                        <td id="FechNacField" class='FechNacField'><?php echo $row['FechNac']?></td>
                                        <td id="ExpField"><?php echo $row['ExpDesc'] ?> </td>
                                        <td id="Perfil"><?php echo $row['perfil'] ?> </td>
                                        <td id="SchoolField"><?php echo $row['School']?></td>
                                        <td id="TelField"><?php echo $row['Tel']?></td>
                                        <td id="RFCField"><?php echo $row['RFC']?></td>
                                        <td id="NSSField"><?php echo $row['NSS']?> </td>
                                        <td id="EdoCivField"><?php echo $row['EdoCiv']?></td>
                                        <td id="FechInField"><?php echo $row['FechIn']?></td>
                                        <td id="ComField"><?php echo $row['Com']?> </td>
                                        <td id="StatField"><?php echo $row['Stat']?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['NoCtrl'] ?>" class="link-dark" id="edit">
                                                <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                                            </a>
                                            <a href="delete.php?id=<?php echo $row['NoCtrl'] ?>" class="link-dark">
                                                <i class="fa-solid fa-trash fs-5"></i>
                                            </a>
                                        </td>
                                        </tr>        
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
            
                function fechNac2edad(fechaNac){
                    var bday  = new Date(fechaNac);
                    var hoy   = new Date();
                    var edad  = hoy.getFullYear() - bday.getFullYear(); 
                    var m     = hoy.getMonth() - bday.getMonth();

                    if (m < 0 || (m === 0 && hoy.getDate() < bday.getDate())) {
                        edad--;
                    }
                
                    return edad;
                };
                //var fechaNac = $("#FechNacField").val();
                //console.log("From ready: "+fechaNac);
                $(".FechNacField").each(function(){
                    $(this).html(fechNac2edad($(this).html())); 
                });
            });
        </script>
    </body>
</html>
