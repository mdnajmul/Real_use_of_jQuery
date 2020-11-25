		</section>
<section class="footeroption">
			       <h2><?php echo "Md. Najmul Ovi"; ?></h2>
			</section>
		</div>
		<div id="gototop"></div>
		<script>
            $(window).scroll(function(){
                if($(this).scrollTop()>300){
                    $('#gototop').fadeIn();
                } else{
                    $('#gototop').fadeOut();
                }
            });
            
            $('#gototop').click(function(){
                $('html, body').animate({scrollTop:0}, 500);
            });
        </script>
	</body>
</html>