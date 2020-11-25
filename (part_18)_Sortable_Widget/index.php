<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            //use sortable function to sort item
            $('#phpitems').sortable({
                placeholder: 'selectedItem',
                axis: 'y',
                opacity: 0.5
            });
            
        });   
         
         
     </script>       
       
        <ul id="phpitems">
            <li data-value="framwork">CodeIgniter</li>
            <li data-value="framwork">Laravel</li>
            <li data-value="framwork">CakePHP</li>
            <li data-value="framwork">Symfony</li>
            <li data-value="cms">Wordpress</li>
            <li data-value="cms">Drupal</li>
            <li data-value="cms">SilverStripe</li>
        </ul>
        
                                                                
    </div>

<?php include "inc/foot.php"; ?>