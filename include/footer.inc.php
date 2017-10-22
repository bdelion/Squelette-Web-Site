      <div id="footer"><p>
<a href="#container">Haut de page</a> | <img src="media/exectime.png" alt=""/> 
		<?php
		  $end_time = getmicrotime();
		  echo 'Page générée en '.round($end_time-$start_time, 3).' s';
		?> | 
		<img src="media/adresse_ip.png" alt=""/>
		<?php
		  echo get_ip();
		?></p>
</div> <!-- fin de footer -->
      
</div>
   </body>
</html>