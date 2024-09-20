<?php
    include "dbconect.php";

    if(isset($_POST['submit'])){
        $fechin = date("Y-m-d H:i:s");
        $nom    = $_POST['nombre'];
        $apP    = $_POST['ApPat'];
        $apM    = $_POST['ApMat'];
        $sexo   = $_POST['sexo'];
        $fechNac= $_POST['fechaNac'];
        $school = $_POST['school'];
        $tel    = $_POST['tel'];
        $rfc    = $_POST['rfc'];
        $nss    = $_POST['nss'];
        $edoCiv = $_POST['edoCivil'];
        $com    = $_POST['com'];
        $status = $_POST['status'];
        $noCtrl = $_POST['noctrl'];
        $exp    = $_POST['Exp'];
        $perf   = $_POST['perf'];

        
        $sql= "INSERT INTO `bolsa`(`NoCtrl`, `Nombre`, `ApPat`, `ApMat`, `Sexo`, `FechNac`, `School`, `Tel`, `RFC`, `NSS`, `EdoCiv`, `FechIn`, `Com`, `Stat`) VALUES ('$noCtrl','$nom','$apP','$apM','$sexo','$fechNac','$school','$tel','$rfc','$nss','$edoCiv','$fechin','$com','$status')";
        $result = mysqli_query($conn,$sql);
        
        echo "<script>console.log(\"".$nom.$apP.$apM.$sexo.$fechNac.$tel.$rfc.$nss.$edoCiv.$com.$status.$noCtrl.$school."Experiencia:".$exp."Perfil:".$perf."\");</script>";

        if($result){
            $sql2="INSERT INTO `perf2solic`(`id`, `perfID`, `noctrl`) VALUES (NULL,'$perf','$noCtrl')";
            $resulta2=mysqli_query($conn,$sql2);
            if($resulta2){
                $sql3="INSERT INTO `exp2solic`(`id`, `expId`, `noctrl`) VALUES (NULL,'$exp','$noCtrl')";
                $resulta3=mysqli_query($conn,$sql3);
                if($resulta3){
                    header("Location: index.php?msg=New Record Created Successfully!");
                }else{
                    echo "Error: " . mysqli_error($conn);    
                }    
            }else{
                echo "Error: " . mysqli_error($conn);    
            }
        }else{
            echo "Error: " . mysqli_error($conn);
        }
        echo "<script>console.log(\"".$nom.$apP.$apM.$sexo.$fechNac.$tel.$rfc.$nss.$edoCiv.$com.$status.$noCtrl.$school."Experiencia:".$exp."Perfil:".$perf."\");</script>";
    }
?>
<!DOCTYPE html>

<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="./scripts.js"></script>
    <title>Main Menu</title>
    <link rel="icon" href="./icon.png">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div>
        <div class="container">
            <img id="branding" class="inline-block" src="./icon.png"/>
            <h3 class="title inline">   
                
                    <div class="inline-block formato">Bolsa de Trabajo</div>
                
            </h3>
        </div>
        <nav class="navbar navbar-light fs-4 mb-5 justify-content-center inline">
            <div class="flexbox">
                <a href="./index.php" ><div class="inline-block nav-itm selected">Bolsa de Trabajo</div></a>
                <a href="./report.php"><div class="inline-block nav-itm">Reportes</div></a>
                <div class="inline-block nav-itm">Bolsa de Trabajo</div>
                <div class="inline-block nav-itm">Bolsa de Trabajo</div>
                <div class="inline-block nav-itm">Bolsa de Trabajo</div>
            </div>
        </nav>
    </div>

    <div class="container">
        <form action="" method="post">
            <div class="form-row ">
                <div class="form-group col-md-3 inline-block">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Miguel">
                </div>
                <div class="form-group col-md-4 inline-block">
                    <label for="ApPat">Apellido Paterno</label>
                    <input type="text" class="form-control" id="ApPat" placeholder="ApPat" name="ApPat">
                </div>
                <div class="form-group col-md-4 inline-block">
                    <label for="ApMat">Apellido Materno</label>
                    <input type="text" class="form-control" id="ApMat" placeholder="ApMat" name="ApMat">
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-1 inline-block">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                    </select>   
                </div>
                <div class="form-group col-md-3 inline-block">
                    <label for="fechaNac">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNac" name="fechaNac">
                </div>
                <div class="form-group col-md-2 inline-block">
                    <label for="fechaNac">Telefono</label>
                    <input type="tel" class="form-control" id="tel" name="tel" placeholder="(555) 555-5555">
                </div>
                <div class="form-group col-md-3 inline-block">
                    <label for="rfc">RFC</label>
                    <input type="text" class="form-control" id="rfc" name="rfc" placeholder="BAFE8203198N7">
                </div>
                <div class="form-group col-md-2 inline-block">
                    <label for="nss">NSS</label>
                    <input type="text" class="form-control" id="nss" name="nss" placeholder="72795608040">
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-3 inline-block">
                    <label for="edoCivil">Estado Civil</label>
                    <select id="edoCivil" name="edoCivil" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Soltero</option>
                        <option value="2">Casado</option>
                        <option value="3">Union Libre</option>
                    </select>                 
                </div>
                <div class="form-group col-md-3 inline-block">
                    <label for="actaNac">Acta de Nacimiento
                        
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file fa-2xl fa-stack-1x"></i>
                            <i id="isActaIcon" class="fa-6xs fa fa-times text-danger fa-stack-2x"></i>
                        </span>
                    </label>
                    <input type="file" id="actaNac" name="actaNac">
                </div>
                <div class="form-group col-md-5 inline-block">
                    <label for="antPen">Carta de no antecedentes Penales
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file fa-2xl fa-stack-1x"></i>
                            <i id="isPenalIcon" class="fa-6xs fa fa-times text-danger fa-stack-2x"></i>
                        </span>
                    </label>
                    <input type="file" id="antPen" name="antPen">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3 inline-block">
                    <label for="foto">Foto
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-camera fa-2xl fa-stack-1x"></i>
                            <i id="isFotoIcon" class="fa-6xs fa fa-times text-danger fa-stack-2x"></i>
                        </span>
                    </label>
                    <input type="file" id="foto" name="foto">
                </div>
                <div class="form-group col-md-4 inline-block">
                    <label for="recomend">Carta de Recomendacion
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file fa-2xl fa-stack-1x"></i>
                            <i id="isRecomendIcon" class="fa-6xs fa fa-times text-danger fa-stack-2x"></i>
                        </span>
                    </label>
                    <input type="file" id="recomend" name="recomend">
                </div>
                <div class="form-group col-md-4 inline-block">
                    <label for="titulo">Titulo
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file fa-2xl fa-stack-1x"></i>
                            <i id="isTitleIcon" class="fa-6xs fa fa-times text-danger fa-stack-2x"></i>
                        </span>
                    </label>
                    <input type="file" id="titulo" name="titulo">
                </div>    
            </div>    
            <div class="form-row">
                <div class="form-group col-md-4 inline-block">
                    <label for="diploma">Certificado de Escolaridad
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file fa-2xl fa-stack-1x"></i>
                            <i id="isDiplomaIcon" class="fa-6xs fa fa-times text-danger fa-stack-2x"></i>
                        </span>
                    </label>
                    <input type="file" id="diploma" name="diploma">
                </div>    
                <div class="form-group col-md-4 inline-block">
                    <label for="curriculum">Curriculum
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-file fa-2xl fa-stack-1x"></i>
                            <i id="isCurriculumIcon" class="fa-6xs fa fa-times text-danger fa-stack-2x"></i>
                        </span>
                    </label>
                    <input type="file" id="curriculum" name="curriculum">
                </div>
                <div class="form-group col-md-3 inline-block">
                    <label for="noctrl">Numero de Control</label>
                    <input type="text" id="noctrl" name="noctrl">
                </div>

                
            </div>
            <div class="form-row">
                <div class="form-group col-md-5 inline-block" >
                    <label for="com">Comentarios:</label><br/>
                    <textarea id="com" name="com"></textarea>
                </div>
                <div class="form-group col-md-5 inline-block">
                    <label for="status">Estado:</label><br/>
                    <select name="status" id="status">
                        <option value="1">Bolsa</option>
                        <option value="2">Empleado</option>
                        <option value="3">Muerto</option>
                    </select>
                </div>
                   
                <div class="form-group col-md-5 inline-block">
                <label for="school">Escolaridad:</label><br/>
                    <select name="school" id="school">
                        <option value="1">Basica </option>
                        <option value="2">Media Superior</option>
                        <option value="3">Licenciatura</option>
                        <option value="4">Maestria</option>
                        <option value="5">Especializacion</option>
                        <option value="6">Posgrado</option>
                    </select>
                </div>

                <div class="form-group col-md-5 inline-block">
                    <label for="Exp">Experiencia:</label><br/>
                    <select name="Exp" id="Exp">
                        <?php
                            $sql = "SELECT * FROM `experiencia`";
                            $result = mysqli_query($conn,$sql);
                        
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                                <option value="<?php echo $row['ExpID']?>">
                                    <?php
                                        echo $row['ExpDesc']
                                    ?>
                                </option>
                        <?php
                            }
                        ?>
                    </select>    
                </div>

                <div class="form-group col-md-5 inline-block">
                    <label for="perf">Perfil:</label><br/>
                    <select name="perf" id="perf">
                        <?php
                            $sql = "SELECT * FROM `perfil`";
                            $result = mysqli_query($conn,$sql);
                        
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                                <option value="<?php echo $row['idPerf']?>">
                                    <?php
                                        echo $row['perfil']
                                    ?>
                                </option>
                        <?php
                            }
                        ?>
                    </select>    
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</body>
</html>
