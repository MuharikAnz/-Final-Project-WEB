<?php  

function render($template, $data = array())
{
	$path = 'template/' . $template . '.php';
	if(file_exists($path))
	{
		extract($data);
		require ($path);
	}
}

?>