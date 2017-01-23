<?php
$connection = mysql_connect('bnu.bseen.co', 'bnubseen_db2', 'B0LDaJbZqxyqJCU2');
mysql_select_db('bnubseen_db2');
$query = "SELECT * FROM esd_db_tab";
$result = mysql_query($query);


$data = array();
    echo " var latlong = [ " ;

for ( $x = 0; $x < mysql_num_rows( $result); $x++) {
    $data[] = mysql_fetch_assoc( $result);
    echo " [ " , $data[ $x][ 'lattitude' ], " , " , $data[ $x][ 'longitude' ], " ] " ;
    if ( $x <= ( mysql_num_rows( $result) - 2) ) {
        echo " , " ;
    }
}
    echo " ]; " ;





echo "<table>"; 
while($row = mysql_fetch_array($result)){  
echo "<tr><td>" . $row['lattitude'] . "</td><td>" . $row['longitude'] . "</td></tr>";
}
echo "</table>"; 

/**
$data = array();
    echo " var latlong = [ " ;
for ( $x = 0; $x < mysql_num_rows( $query); $x++) {
    $data[] = mysql_fetch_assoc( $query);
    echo " [ " , $data[ $x][ 'lattitude' ], " , " , $data[ $x][ 'longitude' ], " ] " ;
    if ( $x <= ( mysql_num_rows( $query) - 2) ) {
        echo " , " ;
    }
}
    echo " ]; " ;**/
	
	
	
mysql_close();


?>
