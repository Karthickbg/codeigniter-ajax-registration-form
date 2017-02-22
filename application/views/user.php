<html>
<body>
<?php 
foreach($details as $detail){ 
	 echo $detail->id; 
	 echo "&nbsp";
	 echo $detail->username; 
	 	 }

echo '<br/> <hr/>';

foreach($customers as $detail){ 
	echo '<table>';
	echo'<tr>';
	echo '<td>';
	 echo $detail->id;
	  echo '</td>';
	  echo '<td>';
	 echo $detail->name;
	 echo '</td>';
	 echo '</tr>';
	 echo '</table>'; 
	 echo '<br/>';
	 	 }

echo element('name', $pr_array) . '</br>' ;
echo element('url', $pr_array,'not there') . '</br>' ;
echo site_url() . '</br>';
echo current_url() . '</br>';
echo uri_string();
?>
	
	</body>
	</html>