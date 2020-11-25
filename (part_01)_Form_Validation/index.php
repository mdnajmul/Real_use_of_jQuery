<?php include "inc/head.php"; ?>

    <div class="myuniversity">
        
        <form id="myform" action="msg.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" id="username" required="1"></td>
                    <td><span class="error_form" id="username_error_msg"></span></td>
                </tr>
                
                <tr>
                    <td>Password</td>
                    <td><input type="password" id="password" required="1"></td>
                    <td><span class="error_form" id="password_error_msg"></span></td>
                </tr>
                
                <tr>
                    <td>Retype-Password</td>
                    <td><input type="password" id="repassword" required="1"></td>
                    <td><span class="error_form" id="repassword_error_msg"></span></td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><input type="text" id="email" required="1"></td>
                    <td><span class="error_form" id="email_error_msg"></span></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                    <td></td>
                </tr>
            </table>
        </form>
        
            
                
                    
                        
                            
                                
                                    
                                        
                                            
                                                
                                                    
                                                        
                                                                
    </div>

<?php include "inc/foot.php"; ?>