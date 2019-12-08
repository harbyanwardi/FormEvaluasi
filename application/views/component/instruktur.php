<div class="col-md-9">
                                    
                                        <div class="form-group">
                                                <label>Instruktur</label>
                                                <select class="form-control" name="id_instruktur" required="required">
                                                    <option value="">Instruktur</option>
                                                <?php
                                                 foreach($data_insert as $d){ ?>
                                                    <option value="<?php echo $d['id_instruktur'];?>"><?php echo $d['nama_instruktur'];?></option>
                                                <?php 
                                                    } ?>    
                                                </select>
                                            </div>
                                        
                                </div>