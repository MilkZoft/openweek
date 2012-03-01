<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/footer.php";
	} else {
?>
      <footer>
            <p>Open Week Education 2012 - www.codejobs.biz</p>
         </footer>
        </div>
    </body>
</html>

<?php } ?>