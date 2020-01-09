<!-- dashboard.php -->

<?php require_once('includes/session.php');
       require_once('includes/conn.php');
       require_once('check.php');    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Menu Principal</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/stylee.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/barra.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


        
    </head>
    
    <body>
        <div class="wrapper">
            <!-- Metro -->
            <nav id="sidebar" class="sammacmedia">
                <div class="sidebar-header">
                    <h3>MENU PRINCIPAL</h3>
                    <strong>RPO</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           Panel de Control
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="a_people.php">
                            <i class="fa fa-plus"></i>
                            Agregar Personas

                        </a>
                      
                    </li>
                    <?php }?>
                    <li>
                        <a href="all_people.php">
                            <i class="fa fa-table"></i>
                            Listado de Personas
                        </a>
                    </li>
                    <li>
                        <a href="invest.php">
                            <i class="fa fa-link"></i>
                            Informe de Problemas

                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="v_issue.php">
                            <i class="fa fa-table"></i>
                           Ver Problemas
                        </a>
                    </li>
                    <?php }?>
                             <?php
                    if($_SESSION['permission']==1){
                    ?>
                    <li>
                        <a href="a_users.php">
                            <i class="fa fa-user"></i>
                            Añadir Usuarios

                        </a>
                    </li>
                    <li>
                        <a href="v_users.php">
                            <i class="fa fa-table"></i>
                            Ver Usuarios

                        </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="settings.php">
                            <i class="fa fa-cog"></i>
                            Ajustes
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
             
                <div clas="col-md-12"></div>
        
                <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>FLEX</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a href="v_users.php"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Cerrar sesión</i></a></li> 
           
                            </ul>
                           
                        </div>
                    </div>
                </nav>
                <div class="line"></div>
                <div class="row">
                         
<!---------------------------------------inicio----------------------------------------->
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                    <a href="v_users.php">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $users;?></div>
                                    
                                    <div>Número total de usuarios</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
<!---------------------------------------fin------------------------------------------->
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel strover sammacmedia">
                    <a href="v_issue.php">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-link fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $cases;?></div>
                                    <div>Número total de casos</div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" >
                <div class="panel panel strover sammacmedia" style="background-color:#90A3BD" >
                    <a href="settings.php">
                        <div class="panel-heading" >
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-cogs fa-5x" ></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $cases;?></div>
                                    <div>Ajustes del Usuarios</div>
                                </div>
                            </div>
                     </div>
                </div>

            </div>  
             
    </div>
  
            
<!-----------------------------------estadistica-Inicio-------------------------------------------------->


<meta charset="utf-8"> 
<?php
require_once("RandomClass.php");

$rand = new RandomTable();
$rand->insertRandom();
$rawdata = $rand->getAllInfo();

$valoresArray;
$timeArray;for($i = 0 ;$i<count($rawdata);$i++){
    $valoresArray[$i]= $rawdata[$i][1];
    $time= $rawdata[$i][2];
    $date = new DateTime($time);
    $timeArray[$i] = $date->getTimestamp()*1000;
}

?>
<div id="contenedor"></div>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor'
      
        
    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Gráfica'
    },
    xAxis: {
        type: 'datetime'
        
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Valores',
            margin: 10
        }
    },
    series: [{
        name: 'Valor',
        data: (function() {
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $timeArray[$i];?>,<?php echo $valoresArray[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

</script>   


<!-----------------------------------estadistica-Fin-------------------------------------------------->
<div class="line" ></div>

        <div class="efect">
            <li >
                <a href="#" >
                    <div class="icon" >  
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <i class="fa fa-home" aria-hidden="true"></i>

                     </div> 
                    <div class="name"><span data-text="Home" >Home </span></div>            
                </a>
            </li>

            <li>
                            <a href="#">
                            <div class="icon">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </div>  
                            <div class="name"><span data-text="About">About </span></div>            
                            </a>
                        </li>

                        <li>
                            <a href="#">
                            <div class="icon">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </div>  
                            <div class="name"><span data-text="Services">Services </span></div>            
                            </a>
                        </li>

                      

                        <li>
                            <a href="#">
                            <div class="icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>  
                            <div class="name"><span data-text="Contact">Contact</span></div>            
                            </a>
                        </li>
                    </div>
                    

            <div class="line" ></div>
            <footer>
                <p class="text-center"> Psicoune &copy;<?php echo date("Y ");?> <i class="fa fa-map-marker " aria-hidden="true"></i> - CALLE FRANCISCO MOSTAJO 204 - YANAHUARA, Arequipa-Perú </p>
                <p class="text-center"> <i class="fa fa-phone" aria-hidden="true"> (054) +51 958 336 625 - 950 319 245</i> <i class="fa fa-envelope" aria-hidden="true"></i> cursospsicoune@gmail.com </p>
                         


                

                
                                    <!--<ul class="text-center">
										<a href="https://www.facebook.com/psicouneorg/" ><i class="fa fa-facebook-official" ></i> Facebook</a>
										<a href="https://twitter.com/psicoune?lang=es" ><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
										<a href="https://www.instagram.com/psicoune/" ><i class="fa fa-instagram" aria-hidden="true"></i> instagram</a>
										<a href="https://www.psicoune.org/social/whatsapp" ><i class="fa fa-whatsapp" aria-hidden="true"> whatsapp</i></a>
									</ul>-->
           
            </footer>
            
            </div>
       


<!--flex derecho-->
<div id="barra">
<div id="barra-lateral">
    <div id="logo-menu">
    </div>

    <ul class="list-unstyled components">
    <li class >
                         
    <li>
         <li >
             <a href="https://www.psicoune.org">
             &nbsp;&nbsp;<i class="fa fa-external-link" style="color:#FFF">&nbsp; Psicoune</i>
            
        </li>
    </li>
    <BR>
    
    </li>
         <li>
            <a href="logout.php">
            &nbsp;&nbsp;<i class="fa fa-sign-out" aria-hidden="true" style="color:#FFF">&nbsp; Cerrar Sesion</i>
             </a>
        </li>
    </li>                    
    </li>
    </ul>
    </div>
</div>
</div>
 <!--flex derecho-->

</div>



        <!-- jQuery CDN -->
         <script src="assets/js/jquery-1.10.2.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             $('sams').on('click', function(){
                 $('makota').addClass('animated tada');
             });
         </script>
    </body>
</html>
