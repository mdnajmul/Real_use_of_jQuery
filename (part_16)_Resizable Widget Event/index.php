<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
          $('#boxone').resizable({
              
              start: function(event, ui){
                  $('#startDim').html(liveDimen(event, ui));
              },
              resize: function(event, ui){
                  $('#resizingDim').html(liveDimen(event, ui));
              },
              stop: function(event, ui){
                  $('#stopDim').html(liveDimen(event, ui));
              }
              
          });
          //hold image height & width  
          function liveDimen(event, ui){
              var element = "Height: "+ui.size.height+"<br/>";
              element += "Width: "+ui.size.width;
              return element;
          }    
            
        });   
         
         
     </script>       
       
        
         <table class="tblone">
             <tr>
                 <td>Start:</td>
                 <td><div id="startDim"></div></td>
             </tr>
             
             <tr>
                 <td>Resizing:</td>
                 <td><div id="resizingDim"></div></td>
             </tr>
             
             <tr>
                 <td>Stop:</td>
                 <td><div id="stopDim"></div></td>
             </tr>
         </table>
                                                               
         <div class="box" id="boxone" style="background: #666">
             Southeast University
         </div>
                                                                
    </div>

<?php include "inc/foot.php"; ?>