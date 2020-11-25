<?php include "inc/head.php"; ?>

    <div class="myuniversity">
        
        
     <script>
         
         
        $(document).ready(function(){
            //set minimum & maximum values of image opacity AND call slider function
            $('#imgSliderOpacity').slider({
                min: 0,
                max: 100,
                value: 100,
                slide: controlImgOpacity
            });
            
            function controlImgOpacity(){
                //hold iopacity value from slider
                var op = $('#imgSliderOpacity').slider('value');
                
                //put opacity value inside css when move slider
                $('#image').css({
                    opacity: op/100
                });
                
                //show image opacity when move slider
                $('#show').html('Image Opacity: '+op/100);
            }
            
        });   
         
         
     </script>       
       
        
        Image Opacity: <div id="imgSliderOpacity" style="margin-top:5px;"></div><br/>
        
        
        <div id="show"></div><br/>
        
        
        <img id="image" src="img/one.jpg" style="height:250px; width:400px;">
                                                                                                                   
                                                                
    </div>

<?php include "inc/foot.php"; ?>