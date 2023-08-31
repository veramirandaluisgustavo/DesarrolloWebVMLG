<?php
$n=$_GET['n'];

for ($i=0;$i<$n;$i++)
{
?>

<input type="number" name="numero<?php echo $i?>"><br>;

<?php
}
echo '<input type="hidden" name="n" value="'.$n.'"';
echo "</form>";
?>

