<?php include "inc/head.php"; ?>

    <div class="myuniversity">
        
        
     <script>
         
         
        $(document).ready(function(){
            //set minimum & maximum values of image height & width AND call slider function
            $('#imgSliderHeight, #imgSliderWidth').slider({
                min: 100,
                max: 500,
                slide: controlImg
            });
            
            function controlImg(){
                //hold image height & width values from slider
                var h = $('#imgSliderHeight').slider('value');
                var w = $('#imgSliderWidth').slider('value');
                
                //put height & width value inside css when move slider
                $('#image').css({
                    height: h,
                    width: w
                });
                
                //show image height & width when move slider
                $('#show').html('Height: '+h+' pixels<br/>'+'Width: '+w+' pixels');
            }
            
        });   
         
         
     </script>       
       
        
        Height: <div id="imgSliderHeight" style="margin-top:5px;"></div><br/>
        Width : <div id="imgSliderWidth" style="margin-top:5px;"></div><br/>
        
        
        <div id="show"></div><br/>
        
        
        <img id="image" src="img/one.jpg" style="height:100px; width:100px;">
                                                                                                                   
                                                                
    </div>

<?php include "inc/foot.php"; ?>