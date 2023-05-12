<?php
include '../../users.php';

echo "<HTML>";
echo "<Title> Add Professor </Title>";
echo "<Center>";
echo "<H1> Insert New Professor Data        ---     <A Href=../../home.php> Home </A></H1>";
echo "<Form action=insertprof.php method=post>";
echo "<Table border=0>";
echo "<Tr><Td>";
echo "<H3> Professor Name ";
echo "</Td><Td>";
echo "<Select name=professor>
		<option value= Kamran> Kamran </option>
		<option value= James> James </option>
		<option value= Kim> Kim </option>
		<option value= John> John </option>
		<option value= Smith> Smith </option>
	</select>
 <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";
echo "<H3> Professor Email ";
echo "</Td><Td>";
echo "<Input type=text name=email> <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";
echo "<H3> Professor University ";
echo "</Td><Td>";
echo "<Select name=university>
		<option value= UMBC> UMBC </option>
		<option value= UMGC> UMGC </option>
		<option value= College Park> College Park </option>
		<option value= Towson> Towson </option>
		<option value= Steveson> Steveson </option>
	</select> <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";
echo "<H3> Professor Course ";
echo "</Td><Td>";
echo "<Select name=course>
		<option value= IS448> IS448 </option>
		<option value= IS127> IS127 </option>
		<option value= IS605> IS605 </option>
		<option value= IS420> IS420 </option>
		<option value= IS450> IS450 </option>
	</select> <Br>";
echo "</Td></Tr>";
echo "</Td><Td>";
echo "<Table border=0 width=70%><Tr><Td valign=top>";
echo "<Input type=submit value=Update>  </Form>";
echo "</Td><Td valign=top>";
echo "<form action=dispalyproff.php><Input type=submit value=Cancel></form>";
echo "</Td></Tr></Table>";
echo "</Td></Tr></Table>";
echo "</Center>";
echo "</HTML>";
?>
