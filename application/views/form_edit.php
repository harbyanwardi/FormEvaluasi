<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IPDC FORM EVALUASI</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/form/css/bootstrap.css')?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/form/css/font-awesome.css')?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/form/css/custom.css')?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
    
</head>
<body>
    <div id="wrapper">
        <form name="form1" id="form1" role="form" action="<?php echo base_url('Welcome/input_form')?>" method="POST">
      
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <img align="center" class="img-responsive" src="<?php echo base_url('assets/logo-lebar.png')?>">  
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-6">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Training
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Biodata</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input readonly class="form-control" name="nama_user" value="<?php echo $nama_user; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Training</label>
                                            <input readonly class="form-control" name="judul_materi" value="<?php echo $judul_materi; ?>"
                                            </select>
                                        </div>
                                        <?php echo $intro; ?>
                                        <div class="form-group">
                                            
                                            <input type="hidden" class="form-control" name="bahasa" value="<?php echo $bahasa; ?>"
                                            </select>
                                        </div>

                                        
                                    </form>
                                    <br />
                                </div>
                                
                                <?php echo $tanya_t; ?>

                            </div>
                        
                        </div>
                    </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
                <?php 
                    if($jum_instruk==1){ ?>
                <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                           

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>

                <?php 
                    } 
                 
                    else if($jum_instruk==2){ ?> 
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                            

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur2; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i2; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>   
                
            <?php 
                    } 
                    else if($jum_instruk==3){ ?> 
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                            

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur2; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i2; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur3; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i3; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                <?php 
                    } 
                    else if($jum_instruk==4){ ?> 
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                            

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur2; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i2; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur3; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i3; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur4; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i4; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                <?php 
                    } 
                    else if($jum_instruk==5){ ?> 
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                            

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur2; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i2; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur3; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i3; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur4; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i4; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur5; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i5; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                <?php 
                    } 
                    else if($jum_instruk==6){ ?> 
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                            

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur2; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i2; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur3; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i3; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur4; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i4; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur5; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i5; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur6; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i6; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                <?php 
                    } 
                    else if($jum_instruk==7){ ?> 
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                            

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur2; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i2; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur3; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i3; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur4; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i4; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur5; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i5; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur6; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i6; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur7; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i7; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                <?php 
                    } 
                    else if($jum_instruk==8){ ?> 
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                            

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur2; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i2; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur3; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i3; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur4; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i4; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur5; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i5; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur6; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i6; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur7; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i7; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur8; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i8; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                <?php 
                    } 
                    else if($jum_instruk==9){ ?> 
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur; ?>
                            

                                <?php echo $tanya_i; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur2; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i2; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur3; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i3; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur4; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i4; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur5; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i5; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur6; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i6; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur7; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i7; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur8; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i8; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        <div class="col-md-6" id="instruktur">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kuesioner Instruktur
                            </div>
                            <div class="panel-body">
                            <div class="row">    
                                <?php echo $instruktur9; ?>
                            </div>
                            <div class="row">

                                <?php echo $tanya_i9; ?>
                            </div>
                            
                            </div>
                            
           
                        </div>

                        </div>
                        
                <?php 
                    } ?>      
                <!-- /. ROW  -->

            
                <div class="row">
                    <div class="col-md-12">
                        <center><button type="submit" class="btn btn-success btn-lg">SUBMIT</button></center>
                    </div>
                </div>
    <!-- /. ROW  -->

    </div>
             <!-- /. PAGE INNER  -->
         </form>   
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    
    <script src="<?php echo base_url('assets/form/js/jquery-1.10.2.js')?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/form/js/bootstrap.min.js')?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/form/js/jquery.metisMenu.js')?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/form/js/custom.js')?>"></script>
    
   
</body>
</html>
