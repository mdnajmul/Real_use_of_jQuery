<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
            var colorHandle = true;
            
            $('#showAnimate').click(function(){
                if(colorHandle){
                    //addClass('class',speed,'easings_effect',callbackFunction)
                   $('#makeAnimate').addClass('animateDiv',2000,'easeInQuart',function(){
                       alert("Animation Completed...");
                   }); 
                } else{
                    $('#makeAnimate').removeClass('animateDiv',2000,'easeInQuart',function(){
                       alert("Back to Previous...");
                   });
                }
                colorHandle = !colorHandle;
            });
            
        });   
         
         
     </script>       
       
        
       <button id="showAnimate">Animate</button>
        
       <div class="myinfo" id="makeAnimate">
           I am Md. Najmul Ovi, PHP & JAVA developer.I competed my graduation BSc. in CSE from Southeast University.I am Md. Najmul Ovi, PHP & JAVA developer.I competed my graduation BSc. in CSE from Southeast University.I am Md. Najmul Ovi, PHP & JAVA developer.I competed my graduation BSc. in CSE from Southeast University.I am Md. Najmul Ovi, PHP & JAVA developer.I competed my graduation BSc. in CSE from Southeast University.I am Md. Najmul Ovi, PHP & JAVA developer.I competed my graduation BSc. in CSE from Southeast University.I am Md. Najmul Ovi, PHP & JAVA developer.I competed my graduation BSc. in CSE from Southeast University. 
        </div>
                                                                
    </div>

<?php include "inc/foot.php"; ?>