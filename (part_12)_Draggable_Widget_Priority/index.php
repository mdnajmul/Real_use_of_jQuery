<?php include "inc/head.php"; ?>

    <div class="myuniversity">
      <style>
          .ourdiv{height: 200px; width: 200px; color: #fff; display: table-cell; vertical-align: middle; text-align: center;}  
      </style>  
        
     <script>
         
         
        $(document).ready(function(){
            
            // $('div').draggable({ stack: '.ourdiv' });
            
            //set draaggable option
            $(".ourdiv").draggable();
            //When mouse click on a box,that box go to top position
            $(".ourdiv").mousedown(function(){
                //set maximum z-index is 0
                var maxZIndex = 0;
                //call each function for all siblings of .ourdiv class
                $(this).siblings(".ourdiv").each(function(){
                    //set current z-index which is click by mouse
                    var currentZIndex = Number($(this).css('z-index'));
                    //if current z-index is greater than maximum z-index, then maximum z-index is will be current z-index. else previous max z-index will be max z-index
                    maxZIndex = currentZIndex > maxZIndex ? currentZIndex : maxZIndex;
                });
                //Now z-index updated by maxZIndex+1 value & that box go to top position
                $(this).css('z-index', maxZIndex+1);
            });
            
        });   
         
         
     </script>       
       
        <div class="ourdiv" style="background:green">Green</div>
        <div class="ourdiv" style="background:red">Red</div>
        <div class="ourdiv" style="background:blue">Blue</div>
        <div class="ourdiv" style="background:yellow">Yellow</div>
                                                                                                              
                                                                
    </div>

<?php include "inc/foot.php"; ?>