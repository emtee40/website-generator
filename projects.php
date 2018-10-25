<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects - IODev Solutions</title>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" href="assets/main.min.css" />
</head>
<body>
    <div class="site-header">
        <div class="site-logo">
            <p>IODev Solutions</p>
        </div>
        <nav class="site-nav">
            <a class="menu-toggle">&#x2261;</a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="active"><a href="projects.html">Projects</a></li>
            </ul>
        </nav>
    </div>

    <div class="main-page">
    	<p>Connected to www.iodev.science (ENCRYPTED)</p>
	<p>200 OK - Welcome to IODev Solutions</p>
	<p>Logged in as guest</p>
	<br/>
	<p>guest@iodev-solutions$ cat github.projects</p>
	<br />
	<br />
	<p>GitHub page: <a href="https://github.com/ioanmoldovan">https://github.com/ioanmoldovan</a></p>
	<br />
	<p>List of Projects:</p>
	<br/>
	<?php
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, 'ProjectLister');
		curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/users/ioanmoldovan/repos');
		$result = curl_exec($ch);
		curl_close($ch);

		$data = json_decode($result, true);

		foreach ($data as $key => $projects)
		{
			echo '<p>- ' . $projects['name'] . '</p>' . PHP_EOL;
			if ($projects['description'] !== null)
				echo '<p>Description: ' . $projects['description'] . '</p>' . PHP_EOL;
			echo '<p>Link: <a href="' . $projects['html_url'] . '">' . $projects['html_url'] . '</a></p>' . PHP_EOL;
			echo '<br/><br/>' . PHP_EOL;
		}
		
	?>	
	<p>END_OF_PAGE</p>
    </div>

    <div class="footer">
        <p>Copyright &copy; Ioan Moldovan <?php echo date("Y"); ?></p>
    </div>

    <script src="assets/menu.min.js"></script>
</body>
</html>
