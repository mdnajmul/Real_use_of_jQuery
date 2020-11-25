<?php include "inc/head.php"; ?>

    <div class="myuniversity">
        
        
     <script>
        $(document).ready(function(){
            var getOutput = $('#show');
            var getSlider = $('#slider');
            
            getSlider.slider({
                range: true,
                min: 100,
                max: 1000,
                //set initial values
                values: [200,400],
                slide: function(event, ui){
                    //show value inside Amount when slider move
                    getOutput.html(ui.values[0]+' - '+ui.values[1]+' Taka');
                    //show value inside input field when slider move
                    $('#minValue').val(ui.values[0]);
                    $('#maxValue').val(ui.values[1]);
                }
            });
            //show initial values inside Amount
            getOutput.html(getSlider.slider('values',0)+' - '+getSlider.slider('values',1)+' Taka');
            //show values inside input fields
            $('#minValue').val(getSlider.slider('values',0));
            $('#maxValue').val(getSlider.slider('values',1));
        });   
     </script>       
       
                        
                            
                                
     Amount:<span id="show"></span><br/><br/>
     <div id="slider"></div><br/>
                                            
     <table>
         <tr>
             <td><label for="minValue">Minimum Amount: </label></td>
             <td><input type="text" id="minValue"></td>
         </tr>
         
         <tr>
             <td><label for="maxValue">Maximum Amount: </label></td>
             <td><input type="text" id="maxValue"></td>
         </tr>
     </table>
                                                        
                                                                
    </div>

<?php include "inc/foot.php"; ?>