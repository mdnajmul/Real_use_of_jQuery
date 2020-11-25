<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
            var colorHandle = false;
            
            $('#showAnimate').click(function(){
                var element = $('#makeAnimate');
                
                if(colorHandle){
                    element.animate({
                        'font-size':'15',
                        'background-color':'green',
                        'color':'#fff',
                        'border-color':'blue',
                        'border-width':'2'
                    });
                } else{
                    element.animate({
                        'font-size':'20',
                        'background-color':'#64FF33',
                        'color':'#000',
                        'border-color':'green',
                        'border-width':'5',
                        'border-radius':'15'
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