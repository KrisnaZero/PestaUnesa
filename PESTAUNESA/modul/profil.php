  <div class="col-md-9" >

                <div class="widget">
              
                   <div class="widget-content">
                
                      <legend align="center"><b>Tentang <?php echo "$namaprofil";?></b></legend>

                    <div class="post">
                      <div class="entry">
                        <div id='isi'>
    
<?php
$idk='1';
 $about=mysql_query("select id_about,isi from about where id_about='$idk'");
$rr=mysql_fetch_array($about);
echo "$rr[isi]";
?>

    
  </div>
  </div>
</div>
                                </div> <!-- /widget-content -->
                           </div> <!-- /widget -->
                    </div> <!-- /span6 -->

                    
                    <!-- menu kanan -->
                    <?php include 'modul/menu_kanan.php'; ?>
    