<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // collect value of input field
    // sebuah fungsi atau sebuah perintah atau sintax yang di miliki oleh PHP yang berguna untuk menontaktifkan seluruh perintah – perintah html
    $name = $_REQUEST['fname'];
    // jika name kosong akan menjalankan block ini
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>