<?php include "inc/head.php"; ?>

    <div class="myuniversity">
 
        
     <script>
         
         
        $(document).ready(function(){
            
            var lang = [
                "Php",
                "Java",
                "JavaScript",
                "jQuery",
                "Python",
                "Ruby",
                "HTML",
                "CSS",
                "Swing",
                "C#",
                "C++",
                "Perl",
            ];
            
            $('#getLang').autocomplete({
                source: lang,
                autoFocus: true,
                minLength: 2,
                delay: 100
            });
            
            
        });   
         
         
     </script>       
       
       <p>Type 2 letter of language.<span style="color:green">Like:ph,ja,js,...</span></p><br/>
       
       <label for="getLang">Type Programming Language Name:</label>
       <input type="text" id="getLang">
                                                               
                                                                
    </div>

<?php include "inc/foot.php"; ?>