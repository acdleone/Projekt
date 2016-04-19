<?php session_start();  $_SESSION['logged_in'] = true; ?>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link href="Blog.css" type="text/css" rel="stylesheet">
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <body>
        <!--<div id="skyline">
            
        </div>-->
        <div id="side">

            <ul id="navigation" class="Menu">
                <li><a href="Blogs.php">Blog</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Registrieren</a></li>
            </ul>

            <!-- Posten optionen schreibt den blog in die Datei blogs.txt-->
            <div class="postbutton">
                <button type="button" onclick="$('#posten').slideToggle()" class="buttons">Neuer Post</button>
            </div>
            <?php
 	if(isset($_POST['submit']))
 	{
    	$title = $_POST['title'];
    	$subtitle = $_POST['subtitle'];
    	$content = $_POST['content'];
    	$text = $title . "," . $subtitle . "," . $content . "\r\n";
        $fp = fopen('blogs.txt', 'a+');


	    if(fwrite($fp, $text))  
    	{
        	echo "<script type='text/javascript'>alert('Beitrag gepostet'); </script>";
    	}
    	fclose ($fp);    
	}
?>
                <!-- Textboxen und buttons-->
                <div id="posten" hidden>
                    <form action="Bloghinzu.php" method="POST">
                            <input type="text" name="title" class="tab" placeholder="TITLE">
                        </p>
                        <p>
                            <input type="text" name="subtitle" class="tab" placeholder="SUBTITLE">
                        </p>
                        <p>
                            <textarea rows="4" cols="55" name="content" class="textarea" placeholder="CONTENT"></textarea>
                        </p>
                        <select name="categorie">
                            <option value="default">Kategorie auswählen</option>
                            <option value="sport">Sport</option>
                            <option value="pc">PC</option>
                            <option value="kino">Kino</option>
                            <option value="garten">Garten</option>
                        </select>
                        <p>
                            <input type="submit" name="submit" value="Posten" class="buttons">
                        </p>
                    </form>
                    <!-- Liest den geposteten Blog aus-->
                </div>
                <?php
  
  $contents = file("blogs.txt");

  foreach($contents as $line)
  {
    $arr = explode(',', $line);
    $title = $arr[0];
    $subtitle = $arr[1];
    $content = $arr[2];
  ?>

                    <br>
                    <div id="tweet">
                        <h2> <?php echo $title; ?>  <small></small></h2>
                        <hr />
                        <p class="untertitel">
                            <?php echo $subtitle; ?>
                        </p>
                        <p class="text">
                            <?php echo $content; ?>
                        </p>

                    </div>

                    <?php
  }
?>


    </body>

    </html>
