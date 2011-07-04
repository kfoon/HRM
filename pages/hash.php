<?php
$id = $_GET['aid'];
$hash = $_GET['id'];
if(!$_GET['check']){
  echo'
<script type="text/javascript">
while(true)
{
var x = GetHTTPContents("index.php?check.php?hash='.$hash.'");
if(x.containes("Scanning complete.")){
break;
}
else{
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
setTimeout("GetHTTPContents("http://127.0.0.1/ajax/index.php?aid='.$hash.'")",1250);;
xmlhttp.send();
}



function GetHTTPContents(var url)
{
  pageURL = new
      java.net.URL
        (url);


  var openConnection = pageURL.openConnection;
  theConnection = openConnection();


  var t=theConnection.connect;
  t();


  var getContent = theConnection.getContent;
  var theURLStream = getContent();


  var readStream = theURLStream.read;
  var gcl = theConnection.getContentLength;
  gcLen = gcl();


  theText ="";
  for (i = 1; i <gcLen; i++) {
   theText += new java.lang.Character(readStream());
   }
	return theText;
}
</script>';
}

if(isset($id)){
$con = mysql_connect('localhost', 'mskebbeh', '7020666');
mysql_select_db("hrm_database", $con);
$sql="SELECT * FROM emp_info WHERE id = '".$id."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
    echo $row['1'];
    echo '<br />';
    echo $row['2'];
    echo '<br />';
    if($row['complete'] == '1'){
    echo 'Scanning complete.';
    }
  }

}
?>