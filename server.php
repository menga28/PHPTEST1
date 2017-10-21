<head>
<title>Post</title>
<link href="stile.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h1 align="center">Risultati Server</h1>
<header>
<nav align="center"> <a href="index.html">Home</a>
    <a href="get.html" title="get">Get</a>
    <a href="post.html" title="post">Post</a>
    <a href="server.html" title="server">Server</a>
</nav>
</header>
<br><br>
 <body>
 <br>Il tuo indirizzo IP:
 <?php echo $_SERVER['REMOTE_ADDR'] . "<br />" ?> 
 <br>Il tuo browser WEB:
 <?php echo $_SERVER['HTTP_USER_AGENT'] . "<br />" ?>
 <br>Il tuo server WEB:
 <?php echo $_SERVER['SERVER_SOFTWARE'] . "<br />" ?> 
 <br>Il tuo server:
<?php echo $_SERVER['SERVER_NAME'] . "<br />" ?>
</body>
<br><br>
<footer><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align="right">
Creato da Mengascini Michele e Ranzuglia Federico
</p>
</footer>
</body>
</>