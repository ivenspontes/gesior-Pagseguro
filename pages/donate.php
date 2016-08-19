<?PHP
if(!defined('INITIALIZED'))
	exit;
if($action == '') {
	if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a donate..';
	}
	else
	{
		$main_content .= '
		<table width="100%" border="0" cellpadding="4" cellspacing="1">
			<tbody>
				<tr>
					<td class="white" colspan="3" bgcolor="#505050"><span class="style4">Detalhes da bonifica&ccedil;&atilde;o de Points.</span></td>
				</tr>
				<tr bgcolor="#f1e0c6"><td width="35%"><b>Doa&ccedil;&atilde;o</b></td><td width="35%"><b>Points</b></td></tr>
				<tr bgcolor="#d4c0a1"><td>R$5,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 5 Points</td></tr>
				<tr bgcolor="#f1e0c6"><td>R$10,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 10 Points</td></tr>
				<tr bgcolor="#d4c0a1"><td>R$20,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 20 Points</td></tr>
				<tr bgcolor="#f1e0c6"><td>R$40,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 40 Points</td></tr>
				<tr bgcolor="#d4c0a1"><td>R$60,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 60 Points</td></tr>
				<tr bgcolor="#f1e0c6">
					<td>
						<img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!!
						<img src="layouts/tibiarl/images/content/bullet.gif">
					<td>
						<img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!!
						<img src="layouts/tibiarl/images/content/bullet.gif">
					</td>
				</tr>
			</tbody>
		</table></br>
		<form target="pagseguro" method="post" action="dntpagseguro.php">
			<input type="hidden" name="reference" value="'.$account_logged->getCustomField("name").'">
			<table border="0" cellpadding="4" cellspacing="1" width="100%" id="#estilo">
				<tbody>
					<tr bgcolor="#505050" class="white">
						<th colspan="2"><strong>Escolha a quantidade de pontos que deseja DONATAR.</strong></th>
					</tr>
					<tr bgcolor="#d4c0a1">
						<td width="10%">Sua conta</td>
						<td><strong>'.$account_logged->getCustomField("name").'</strong></td>
					</tr>
					<tr bgcolor="#d4c0a1">
						<td width="10%">Pontos</td>
						<td><input name="itemCount" type="number" min="1" size="5" maxlength="5"></td>
					</tr>
					<tr bgcolor="#d4c0a1">
						<td colspan="2">
							<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/carrinhoproprio/btnFinalizar.jpg" name="submit"/>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		<b><span style="color:#ff0000;">OBS:</span></b> Points are delivered <b>automatically</b> after the <u>approved</ u> of your payment by PagSeguro.';
	}
}
elseif($action == 'final') {
	$main_content .= '
	<br/><br/><br/><br/>
	<center>
		Thank you for your donation!<br/>
		When our systems confirm your donation will be automatically added points in your account as a thank you.<br/>
		Continue contributing to our server reporting bugs in the forum.
		<br/><br/>
		Have fun!
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="BigButton">
		<table width="100%">
			<tr>
				<td>
					<a href="javascript:void();" onclick=location.href="?subtopic=accountmanagement">
					<div class="BigButton" style="background-image: url(layouts/tibiarl/images/buttons/sbutton.gif);">
						<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
							<div class="BigButtonOver" style="background-image: url(layouts/tibiarl/images/buttons/sbutton_over.gif); visibility: hidden;">
							</div>
							<input class="ButtonText" name="Back" alt="Back" src="layouts/tibiarl/images/vips/_sbutton_back.gif" type="image">
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div></center>';
}
?>
