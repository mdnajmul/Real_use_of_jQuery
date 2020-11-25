<?php include "inc/head.php"; ?>

    <div class="myuniversity">
        
        
     <script>
        $(document).ready(function(){
            $('#textname').tooltip({
                content:'Your Full Name',
                track:true,
                show:{delay:100, duration:500, effect:'slideDown'},
                hide:{delay:100, duration:500, effect:'slideUp'}
            });
        });   
     </script>       
       
                        
                            
                                
    <label id="lblname" for="textname" title="Full Name">Name</label>                                
    <input type="text" id="textname" title="Your name will be here...">
                                            
                                                
                                                    
                                                        
                                                                
    </div>

<?php include "inc/foot.php"; ?>