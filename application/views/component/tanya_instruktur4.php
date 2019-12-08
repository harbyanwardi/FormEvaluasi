<?php
  foreach($data_insert as $d){ ?>
  
<div class="col-md-8">
                                    
                                    <div class="form-group">

                                            <label><?php echo $d['isi_pertanyaan_i'];?></label>
                                            <input type="hidden" class="form-control" name="id_pertanyaan_i[]" value="<?php echo $d['id_pertanyaan_i'];?>"/>
                                        </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                            <div class="radio-inline">
                                                
                                                    <input type="radio" required="required" name="nilai_i4<?php echo $d['id_pertanyaan_i'];?>[]"  value="1"/>1 &nbsp; &nbsp;
                                                    &nbsp; <input type="radio" name="nilai_i4<?php echo $d['id_pertanyaan_i'];?>[]"  value="2"/>2 &nbsp; &nbsp;
                                                    &nbsp; <input type="radio" name="nilai_i4<?php echo $d['id_pertanyaan_i'];?>[]"  value="3"/>3 &nbsp; &nbsp;
                                                    &nbsp; <input type="radio" name="nilai_i4<?php echo $d['id_pertanyaan_i'];?>[]" value="4"/>4
                                                    &nbsp; &nbsp;
                                                    &nbsp; <input type="radio" name="nilai_i4<?php echo $d['id_pertanyaan_i'];?>[]" value="5"/>5
                                            </div>
                                            
                                    </div>
                                </div>
                               
<?php 
    } ?>  
                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label>Saran</label>  
                                            <textarea required="required" class="form-control" name="isi_saran_ins_4" placeholder="Masukan Saran Anda" rows="3"></textarea> 
                                        </div>
                                </div> 