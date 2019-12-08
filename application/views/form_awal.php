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
</head>
<body>
    <div id="wrapper">
        
      
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
                              
                        </div>
                       <div class="panel-body">
                       
                        <?=$this->session->flashdata('pesan')?>
                          <form action="<?php echo base_url('Welcome/insert')?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>BIODATA</h3>
                                    <?php echo $v_user; ?>
                                        <?php echo $pil_training; ?>
                                    
                                    <br />
                              </div> 
                                <div align="center" class="col-md-12">
                                    <label>PILIH BAHASA</label> <br>
                                    <div class="form-group">
                                      <div class="radio-inline">
                                               
                                                    <input type="radio" required="required" name="bahasa"  value="indonesia"/>Bahasa Indonesia &nbsp; &nbsp;
                                                    &nbsp; &nbsp;<input type="radio" required="required" name="bahasa"  value="inggris"/>Bahasa Inggris &nbsp; &nbsp;       
                                      </div>
                                    </div>   
                                    <center><button type="submit" class="btn btn-success " name='finish' value='Lanjut'>Proses</button></center>
                                </div>
                            
                            </form>
                        </div>
                    </div>
                    
                     <!-- End Form Elements -->
                </div>
               
            </div>
            


            
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            
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
