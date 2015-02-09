<html>
<head>
<link rel="stylesheet" type="text/css" href="/branch.css" />

<script type="text/javascript">
function loadXMLDoc()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			<!-- document.getElementById("myDiv").innerHTML = xmlhttp.responseText; -->
			alert(xmlhttp.responseText);
		}
	}
	xmlhttp.open("GET", "getColor.php", true);
	xmlhttp.send();
}
</script>

</head>
<body>

<div>
<p class="p_title">
拉分支
</p>

<form action="branch.php" method="post">
	从(分支名): <input type="text" name="src_branch_name" />
	拷贝到(分支名): <input type="text" name="dest_branch_name" />
	<input type="submit" value="提交" />
	
</form>

</div>

<div>
	<p>修改该处文字颜色！！！</p>
	<p><input type="button" value="修改" onclick="loadXMLDoc()"/></p>
</div>

</body>
</html>