
	<?php
			# ESTE SCRIPT FALE CONOSCO #
			$site = " "; #nome do site
			$url_site = " "; #Endereço do seu site
			$email_site = " "; #e-mail do site
			$email2_site = " "; #e-mail alternativos
						

			# Não mexa nestas variaveis #
			$html = "Content-Type: text/html; charset=iso-8859-1\n";
			$html.="From: Origem\n";

			# $mem = Mensagem de agradecimento #
			$men = "<div align=center><br>
			  <table width=100% border=0>
				<tr>
				  <td>
					<div align=center><font color=#999999><b><font size=2>OBRIGADO PELA
					  SUA MENSAGEM!!!!</font></b></font></div>
				  </td>
				</tr>
			  </table>
			  <table width=100% border=0>
				<tr>
				  <td>
					<div align=center>
					  <p>Caso sua mensagem n&atilde;o seja respondida dentro de 3 dias entre
						em contato via e-mail </br> Email </br>
						<a href=mailto:$emaila_site> Email alternativo </a></br>						
					  <p>Atenciosamente: $site</br></br>
					  <a href=$url_site>http://www.site.com.br</a> <br>
					  </p>
					</div>
				  </td>
				</tr>
			  </table>
			</div>";
		
			if (!(ereg ("^.[a-zA-Z0-9]+@.+\\..+$", $email)))
			print "<div align=center></br></br></br>
			  <table width=500 border=0 bgcolor=#FF7546>
				<tr>
				  <td>
					<div align=center><b><font color=#000000>E-mail inválido!!!</font></b></div>
				  </td>
				</tr>
			  </table></br>
			  <a href=javascript:window.history.go(-1) target=_self><b><font color=#0066CC>VOLTAR</font></b></a>
			</div>";		
			else
			 if ($nome == "" || $assunto == "" || $mensagem == "")
			 echo "<div align=center> </br></br></br>
			  <table width=500 border=0 bgcolor=#FFFF79>
				<tr>
				  <td>
					<div align=center><b><font color=#000000>Preencha todos os campos!</font></b></div>
				  </td>
				</tr>
			  </table></br>
			  <a href=javascript:window.history.go(-1) target=_self><b><font color=#0066CC>VOLTAR</font></b></a>
			 </div>";
			 else
			 echo "<div align=center> </br></br></br>
			  <table width=500 border=0 bgcolor=#0099CC> 
				<tr>
				  <td>
					<div align=center><b><font color=#000000>E-mail enviado com sucesso!</font></b></div>
				  </td>			  
				</tr>
			  </table></br>
			  <a href=javascript:window.history.go(-1) target=_self><b><font color=#0066CC>VOLTAR</font></b></a>
			</div>";

			 
			 mail($email_site, $assunto, "<div align=center>
			  <table width=100% border=0>
				<tr>
				  <td>
					<div align=center><b><font color=#999999>Mensagem:</font></b></div>
				  </td>
				</tr>
				<tr>
				  <td>
					<div align=left>Nome: $nome</div>
				  </td>
				</tr>
				<tr>
				<td>
					<div align=left>E-mail: $email</div>
				</td>
				</tr>
				<tr>
				<td>
					<div align=left>Mensagem: $mensagem</div>
				</td>
				</tr>
			</table>
		</div>", $html);
		mail($email, $assunto, $men, $html);
	?>
    
