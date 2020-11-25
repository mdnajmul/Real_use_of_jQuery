<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
            $('#frameworks, #cms').sortable({
                //connect with frameworks & cms menu//
                
                //connectWith: '#frameworks, #cms'
                connectWith: 'ul[data-value="connect"]'
            });
            
        });   
         
         
     </script>       
       
        <ul id="frameworks" data-value="connect">
            <li>CodeIgniter</li>
            <li>Laravel</li>
            <li>CakePHP</li>
            <li>Symfony</li>
            <li>FuelPHP</li>
        </ul>
        
        <ul id="cms" data-value="connect">
            <li>Joomla</li>
            <li>Mambo</li>
            <li>Wordpress</li>
            <li>Drupal</li>
            <li>SilverStripe</li>
        </ul>
        
                                                                
    </div>

<?php include "inc/foot.php"; ?>