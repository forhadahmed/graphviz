<?

$dot = $_POST['dot'];

$sha = sha1($dot);

file_put_contents("files/".$sha.".dot", $dot);
$output = array(); $rc = 0;
exec("dot -Tpng "."files/".$sha.".dot"." -o files/".$sha.".png 2>&1", $output, $rc);  
 
if ($rc == 0) {   
    echo "files/".$sha.".png";
} else {
    foreach ($output as $line) {
        echo str_replace("files/".$sha.".dot", "", $line)."<br>";
    }
}

?>