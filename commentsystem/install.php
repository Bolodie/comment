<?php
$dom = $_SERVER['SERVER_NAME'];
$page = $_SERVER['REQUEST_URI'];
$uid=$dom.$page;
include('lib/includes.php');
?>
<style>
#cs {width:700px; color:#333; padding:10px; font:normal 14px Verdana; text-align:left; background:#FFF;}
#cs a{color:#55A;}
#cs .ok{font:bold 20px Arial; padding:5px;}
#cs table tr.w td{padding:5px;}
#cs table tr.w:hover{background:#EEE;}
</style>
<div id="cs">
	<h1>Установка системы комментариев</h1>
	<div>
		Система управления комментариямы разработана создателями сайта <a href="http://localsite/wordpress/cooment/" target="_blank">http://localsite/wordpress/cooment/</a>,
		
		<a href=""  target="_blank">этой странице</a>. 
	</div><br>
<form action="install.php">
	<table  cellspacing="0" cellpadding="0">
		<tr><td colspan="2"><h3>Установки БД и подключения к MySQL</h3></td></tr>
		<tr class="w">
			<td>Имя хоста БД</td>
			<td><input type="text" name="hostname" maxlength="60" size="40"></td>
		</tr>
		<tr class="w">
			<td>Логин подключения к БД</td>
			<td><input type="text" name="login" maxlength="60" size="40"></td>
		</tr>
		<tr class="w">
			<td>Пароль подключения к БД</td>
			<td><input type="password" name="pwd" maxlength="60" size="40"></td>
		</tr>
		<tr class="w">
			<td>Название базы данных (БД)</td>
			<td><input type="text" name="db_name" maxlength="60" size="40"></td>
		</tr>
		<tr class="w">
			<td>Префикс таблиц системы комментариев по умолчанию</td>
			<td><input type="text" name="prefiks" maxlength="60" size="40" value="comment_"></td>
		</tr>
		<tr><td colspan="2"><br><h3>Личные данные администратора</h3></td></tr>
		<tr class="w">
			<td>Пароль доступа</td>
			<td><input type="text" name="adminpass" maxlength="60" size="40"></td>
		</tr>
		<tr class="w">
			<td>Повторите пароль</td>
			<td><input type="text" name="repass" maxlength="60" size="40"></td>
		</tr>
		<tr class="w">
			<td>Ваш e-mail</td>
			<td><input type="password" name="email" maxlength="60" size="40"></td>
		</tr>
		<tr><td colspan="2" align="center"><br><input class="ok" type="submit" value="Установить" size="5"><br></td></tr>
	</table>
</form>
</div>