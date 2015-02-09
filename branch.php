<html>
<head>
<link rel="stylesheet" type="text/css" href="/branch.css" />
</head>
<body>

<div>
	<p class="p_title">
		拉分支
	</p>
</div>

<?php
function _getBranchUrl($name) {
   $trunk="https://svn.baidu.com/app/gensoft/browser-ipcs/%rep%/newbrowser";
   $branch="https://svn.baidu.com/app/gensoft/browser-ipcs/branches/newbrowser/%rep%/";
   if ("trunk" == strtolower($name)) {
	   return str_replace("%rep%", "trunk", $trunk);
   } else {
	   return str_replace("%rep%", $name, $branch);
   }
}

function _generateHead($src_name, $dest_name, $src_url, $dest_url) {
	$myfile = fopen("branch.html", "r") or die("server encounter serious problem");

	while(!feof($myfile))
	{
		$line = fgets($myfile);
		$line = str_replace("src_branch_url", $src_url, $line);
		$line = str_replace("src_branch_name", $src_name, $line);
		$line = str_replace("dest_branch_url", $dest_url, $line);
		$line = str_replace("dest_branch_name", $dest_name, $line);
		echo($line);
	}

	echo($line);
	fclose($myfile);
}

$src_name = $_POST["src_branch_name"];
$dest_name = $_POST["dest_branch_name"];
$src_url = _getBranchUrl($src_name);
$dest_url = _getBranchUrl($dest_name);

_generateHead($src_name, $dest_name, $src_url, $dest_url);

?>

<p></p>

<div class="output_aera">
	Copying...
</div>

</body>
</html>