<?php
    include_once("set_counter.php");
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		include_once("meta_info.php");
	?>
	<title></title>

	<style type="text/css">
		@import url("general.css");
	</style>
</head>
<body>
<?php
	include_once("navigator.php");
?>

<div class=Main_Container>
<form method="post" action="processor.php" name="write_message">
	<label for="Name">Name:<input type="text" name="Name" id="Name" placeholder="Your Name"></label>
	<label for="Subject">Subject:<input type="text" name="Subject" id="Subject" placeholder="The Subject"></label>
	<p><label for="Content">Message</label></p>
	<textarea name="Content" id="Content" cols="100" rows="20"></textarea>
	<p><input type="button" onclick="check()" value="submit"></p>
</form>
<table id='counter'>
    <tr>
        <td>You have visit this site:<?php echo $_COOKIE['counter'] ?> times</td>
    </tr>
    <tr>
        <td>There are totally
            <?php
                echo $visit_num;
            ?>
         people visit my site!</td>
    </tr>
</table>
</div>
<script type="text/javascript">
       <!-- 此check()函式在最後的「傳送」案鈕會用到 -->
        function check()
        {
                //若<form>屬性name值為reg裡的文字方塊值為空字串，則顯示「未輸入姓名」
                if(write_message.Name.value == "") 
                {
                    alert("未輸入姓名");
                }
                else if(write_message.Content.value == "")
                {
                    alert("請輸入內容");
                }
                //<!-- 若以上條件皆不符合，也就是表單資料皆有填寫的話，則將資料送出 -->
                else
                { 
                	write_message.submit();
                }
         }
</script>
<?php
	include_once("footer.php");
?>

</body>
</html>