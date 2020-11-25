<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
            $('#javaitem').selectable({
                stop: function(){
                    var output = "";
                    //here use jQuery ui-selected class to hold selected items
                    $('.ui-selected').each(function(){
                        output += $(this).text()+"<br/>";
                    });
                    //show selected items
                    $('#show').html(output);
                }
            });
            
        });   
         
         
     </script>       
       
        <ul id="javaitem">
            <li>Servlets</li>
            <li>JSP</li>
            <li>JSTL</li>
            <li>Hybernet</li>
            <li>Spring</li>
            <li>Spring Boot</li>
            <li>Struts 2.0</li>
        </ul>
        <br/>
        <p style="color: green; font-weight: bold;">You Selected:</p>                                                      
        <div id="show"></div>
                                                                
    </div>

<?php include "inc/foot.php"; ?>