<?php include "inc/head.php"; ?>

    <div class="myuniversity">
        
        
     <script>
        $(document).ready(function(){
            $('#sliderprice').slider({
                value: 100,
                min: 0,
                max: 500,
                step: 50,
                slide: function(event, ui){
                    //show initial value 100 inside input field
                    $('#price').val("Tk. "+ui.value);
                }
            });
            //set slider option to change price
            $('#price').val("Tk. " + $('#sliderprice').slider("value"));
        });   
     </script>       
       
                        
                            
                                
    
                                            
     <label for="price">Select Price:</label>                                           
     <input type="text" id="price" readonly style="font-weight:bold; color:green; margin-bottom:20px;">
     <div id="sliderprice"></div>
                                                        
                                                                
    </div>

<?php include "inc/foot.php"; ?>