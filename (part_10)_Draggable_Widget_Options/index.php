<?php include "inc/head.php"; ?>

    <div class="myuniversity">
        
        
     <script>
         
         
        $(document).ready(function(){
            
            $('#draggable').draggable({
                //set image move to x-axis
                //axis: 'x',
                
                //Defines the element in which the window will be able to move
                //containment: 'parent',
                containment: '#outeroption',
                
                //set cursor point when draggable the image
                cursor: 'move',
                
                //set opacity when draggable the image
                opacity: 0.5,
                
                //image back to initial position after draggable the image
                revert: true
                
                
            });
            
        });   
         
         
     </script>       
       
        <div id="outeroption" class="outerdiv">
            <div id="draggable" class="innerdiv">
                Md. Najmul Ovi
            </div>
        </div>                                                                                                             
                                                                                                                   
                                                                
    </div>

<?php include "inc/foot.php"; ?>