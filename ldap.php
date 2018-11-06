<?php
set_time_limit(100);
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);

$ldap_HostIP = "199.244.82.56"; //IP Pública de ambiente de Calidad LDAP-UVM
//$ldap_HostPt = 636; // Puerto de referencia
$ldap_AppUsr = 'npsuvm01'; //Usuario con permisos de consulta al árbol LDAP-UVM
$ldap_AppPwd = 'npsuvm01'; //Contraseña
$ldap_BaseDN = "ou=UVM,dc=uvmnet,dc=qa"; //Base de consulta, puede quedar "dc=uvmnet,dc=qa"

//Determina la validez del string de conexión.
$ldap_Connct = ldap_connect($ldap_HostIP)
or die("Can not connect to {$ldap_HostIP}")
;

//Si puede alcanzar el servidor entonces accede cómo App
if ($ldap_Connct) {
	echo "ldap_connect: Success <br>";
	var_dump($ldap_Connct);
	echo "<br><hr><br>";
	//Determina la validez del Usuario y Contraseña 
	$ldap_AppBnd = ldap_bind($ldap_Connct,$ldap_AppUsr,$ldap_AppPwd)
	or die ("Can not Bind with App Authentication {$ldap_Connct}{$ldap_AppUsr}{$ldap_AppPwd}")
	;
	}

$ldap_AuthUs = '';
$ldap_AuthPw = '';
$ldap_sAMAcN = '';
$ldap_SchFil = "(cn=*)"; //Filtro genérico que provee una lista de todos los usuarios.
$ldap_SchAtt = array("sAMAccountName","givvenname","dn","ou", "sn", "mail", "memberOf"); //Se indican los atributos/propiedades relevantes que deben ser devueltos por el servidor LDAP-UVM

if(isset($_POST['AuthUs']) && isset($_POST['AuthPw'])){
	$ldap_AuthUs = $_POST['AuthUs'];
	$ldap_AuthPw = $_POST['AuthPw'];
// Se busca AuthUs por el atributo sAMAccountName
	$ldap_sAMAcN = $ldap_AuthUs;
	$ldap_SchFil = "(sAMAccountName=$ldap_sAMAcN)";
	$ldap_SchAtt = array("dn");
	echo "Searching for" . $ldap_AuthUs;
	}

if ($ldap_AppBnd){
	echo "ldap_bind: Success <br>";
	var_dump($ldap_AppBnd);
	echo "<br><hr><br>";
	$ldap_AppSch = ldap_search($ldap_Connct,$ldap_BaseDN,$ldap_SchFil,$ldap_SchAtt)
	or die ("Can not execute Query {$ldap_Connct} {$ldap_BaseDN} {$ldap_SchFil}")
	;
	}
if($ldap_AppSch){
	echo "ldap_search: Success <br>";
	var_dump($ldap_AppSch);
	echo "<br><hr><br>";
	$ldap_SchRsl = ldap_get_entries($ldap_Connct,$ldap_AppSch) or die ("Can not retreive Entries {$ldap_AppSch}");
	for ($i=0; $i<$ldap_SchRsl["count"]; $i++)
        {
		echo $ldap_SchRsl[$i]["samaccountname"][0] . " | " . $ldap_SchRsl[$i]["dn"] . " <hr> ";
		}
	
	if ((int) @$ldap_SchRsl['count'] > 0) {
		$ldap_AuthDN = $ldap_SchRsl[0]['dn'];
		echo "<br>User: " . $ldap_AuthDN . "<br>";
		echo "Pass: " . $ldap_AuthPw . "<br>";
		}
	if (trim((string) $ldap_AuthDN) == '') {
		die("Empty DN. Something is wrong.");
		}
		
// Se obtiene el string "DN" del usuario buscado. Y se valida la contraseña proporcionada (AuthPw)
	$ldap_AuthSt = ldap_bind($ldap_Connct, $ldap_AuthDN, $ldap_AuthPw)
	or die("Couldn't bind to LDAP as $ldap_AuthUs with pw: $ldap_AuthPw")
	;
	if ($ldap_AuthSt){
		print ("Authentication against LDAP succesful. Valid username and password provided.");
		}
	}


ldap_close($ldap_Connct);
?>
<hr/>
    <form action="#" method="POST">
        <label for="AuthUs">Usuario: </label><input id="AuthUs" type="text" name="AuthUs" /> 
        <label for="AuthPw">Contraseña: </label><input id="AuthPw" type="password" name="AuthPw" />    
		<input type="submit" name="submit" value="Submit" />
    </form>