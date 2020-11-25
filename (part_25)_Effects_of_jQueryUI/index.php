<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
            $("#box").click(function(){
                $("#box").effect({
                    effect:"explode",
                    easing:"easeInExpo",
                    pieces:4,
                    duration:4000
                });
            });
            
            
        });   
         
         
     </script>       
       
       <div class="maindiv">
           <div id="box">Click Here...</div>
       </div>
                                                               
                                                                
    </div>

<?php include "inc/foot.php"; ?>