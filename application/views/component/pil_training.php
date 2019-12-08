<div class="form-group">
                                            <label>Pilih Nama Training</label>
                                            
                                            <select class="form-control" name="judul_materi" required="required">
                                                <option value="">Pilih Materi</option>
                                                <?php
                                                 foreach($data_insert as $d){ ?>
                                                <option value="<?php echo $d['judul_materi'];?>"><?php echo $d['judul_materi'];?></option>
                                                
                                                <?php 
                                                    } ?>
                                            </select>
                                        </div>