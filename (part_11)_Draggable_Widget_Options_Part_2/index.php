<?php include "inc/head.php"; ?>

    <div class="myuniversity">
        
        
     <script>
         
         
        $(document).ready(function(){
            
            $('div').draggable({
                
                cursor: 'pointer',
                //Move squares to the right, squares will snap into position
                snap: '#outeroption',
                //auto move to right/fixed position inside outerdiv when 50% dragable complete
                snapTolerance: 50,
                //cancel draggable options for outerdiv
                cancel: '#outeroption'
            
            });
            
        });   
         
         
     </script>       
       
        <div class="innerdiv" style="background:green">Green</div>
        <div class="innerdiv" style="background:red">Red</div>
        <div class="innerdiv" style="background:blue">Blue</div>
        <div class="innerdiv" style="background:yellow">Yellow</div>
        <br/>
       
        <div id="outeroption" class="outerdiv"></div>                                                                                                             
                                                                                                                   
                                                                
    </div>

<?php include "inc/foot.php"; ?>