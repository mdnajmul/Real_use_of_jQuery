<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
            $('#framelist li').draggable({
                //copy draggable element
                helper: 'clone',
                revert: 'invalid',
                cursor: 'pointer'
            });
            
            //draggable for php framework
            $('#phpFramework').droppable({
                //can drop only php framework
                accept: 'li[data-value="php"]',
                drop: function(event, ui){
                    $('#php').append(ui.draggable);
                }
            });
            
            //draggable for java framework
            $('#javaFramework').droppable({
                //can drop only javaframework
                accept: 'li[data-value="java"]',
                drop: function(event, ui){
                    $('#java').append(ui.draggable);
                }
            });
          
            
        });   
         
         
     </script>       
       
        <div class="box">
            PHP & JAVA Frameworks<hr/>
            <ul id="framelist">
                <li data-value="php">CodeIgniter</li>
                <li data-value="php">CakePHP</li>
                <li data-value="php">Laravel</li>
                
                <li data-value="java">Hibernate</li>
                <li data-value="java">Spring</li>
                <li data-value="java">Spring Boot</li>
            </ul>
        </div>
                                                                                                             
        <div class="box" id="phpFramework">
            PHP Framwork<hr/>
            <ul id="php"></ul>
        </div>
                                                                                                             
        <div class="box" id="javaFramework">
            JAVA Framework<hr/>
            <ul id="java"></ul>
        </div> 
                                                                                                              
                                                                
    </div>

<?php include "inc/foot.php"; ?>