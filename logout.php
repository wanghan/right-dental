<?php
		session_start();

        if(session_unregister("card_info"))
        {

			echo "<script>
				  parent.location=\"club.php\";
				  </script>";

		}
?>