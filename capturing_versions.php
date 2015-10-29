<?php 
exec("mysql --version", $output, $status); #output: array, status: int
if($status != 0) {
	exit("ERROR: could not execute external program with input\n>>\t\"$a\"\n");
}
preg_match("/Distrib\s([0-9].[0-9].[0-9]{1,2})/",$output[0],$matches); #matches: array
print("Distrib $matches[1]\n");
preg_match("/Ver\s([0-9]{1,2}.[0-9]{1,2})/",$output[0],$matches); #matches: array
print("Ver $matches[1]\n");
unset($output); #clears contents


exec("mysqladmin --version", $output, $status); #output: array, status: int
if($status != 0) {
	exit("ERROR: could not execute external program with input\n>>\t\"$a\"\n");
}
preg_match("/Distrib\s([0-9].[0-9].[0-9]{1,2})/",$output[0],$matches); #matches: array
print("Distrib $matches[1]\n");
preg_match("/Ver\s([0-9]{1,2}.[0-9]{1,2})/",$output[0],$matches); #matches: array
print("Ver $matches[1]\n");
unset($output); #clears contents

exec("mysqld --version", $output, $status); #output: array, status: int
if($status != 0) {
	exit("ERROR: could not execute external program with input\n>>\t\"$a\"\n");
}
preg_match("/Ver\s([0-9]{1,2}.[0-9]{1,2})/",$output[0],$matches); #matches: array
print("Ver $matches[1]\n");
unset($output); #clears contents

#print($_SERVER['HTTP_USER_AGENT']);?
#print(php_uname());? if darwin -> mac
?>