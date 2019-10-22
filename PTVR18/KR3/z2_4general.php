<?php
require_once 'z2_2func.php';
require_once 'z2_1file.php';
?>
<html>
    <head>
        <title>z2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    	<div class="col-md-6 margin_center">
    		<?php
    			if(!empty($_GET)){
					if($_GET['maakond'] == 'Harjumaa'){
						viewHarjuMenu($city);
					}elseif($_GET['maakond'] == 'Tartumaa'){
						viewTartuMenu($city);
					}elseif($_GET['maakond'] == 'Ida-Virumaa'){
						viewIdaMenu($city);
					}else{
						viewMenuMaakond($city);
					}
				}else{
					viewMenuMaakond(); 
				}
				viewSearchMenu($city);
    		?>
    	</div>
    	<br>
		<div class="col-md-2 margin_center">
			<?php
				if(!empty($_GET['city'])){
					viewCityInfo($city,$_GET['city']);
				}elseif(!empty($_GET['maakond'])) {
					viewMaakondInfo($city,$_GET['maakond']);
				}else{
					viewAllInfo($city);
				}	
			?>
		</div>
    </body>
</html>

