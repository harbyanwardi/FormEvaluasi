<?php
  foreach($data_insert as $d){ ?>
<div class="col-md-8">
                                    <div class="form-group">
                                            <label><?php echo $d['isi_pertanyaan'];?></label> 
                                            <input  type="hidden" class="form-control" name="id_pertanyaan[]" value="<?php echo $d['id_pertanyaan'];?>"/>  
                                        </div>

                                   
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group" >                                       
                                            <div class="radio-inline">
                                                
                                                    <input type="radio" required="required" name="nilai_t<?php echo $d['id_pertanyaan'];?>[]" value="1"/>1 &nbsp; &nbsp;
                                                    &nbsp; <input type="radio" name="nilai_t<?php echo $d['id_pertanyaan'];?>[]"  value="2"/>2 &nbsp; &nbsp;
                                                    &nbsp; <input type="radio" name="nilai_t<?php echo $d['id_pertanyaan'];?>[]"  value="3"/>3 &nbsp; &nbsp;
                                                    &nbsp; <input type="radio" name="nilai_t<?php echo $d['id_pertanyaan'];?>[]" value="4"/>4
                                                   &nbsp; &nbsp;
                                                    &nbsp; <input type="radio" name="nilai_t<?php echo $d['id_pertanyaan'];?>[]" value="5"/>5
                                            </div>     
                                    </div>                              
                                    
                                     
                                </div>
                                
<?php 
    } ?>  

                                <div class="col-md-12">
                                    <div class="form-group">
                                            <label>Saran</label>  
                                            <textarea required="required" class="form-control" name="isi_saran" placeholder="Masukan Saran Anda" rows="3"></textarea> 
                                        </div>
                                </div> 
 