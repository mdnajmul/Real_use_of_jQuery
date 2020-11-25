<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
            $('#showDate').datepicker({
                showOn: 'both',
                buttonText: 'Show Date',
                dateFormat: 'dd/mm/yy',
                changeMonth: true,
                changeYear: true
            });
            
        });   
         
         
     </script>       
       
       
       <label for="showDate">Select Date:</label>     
       <input type="text" id="showDate">
                                                               
                                                                
    </div>

<?php include "inc/foot.php"; ?>