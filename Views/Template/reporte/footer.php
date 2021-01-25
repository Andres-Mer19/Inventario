<?php

function getfooter(){
		$footer='
	<footer>
		<div class="container">
			<div class="thanks">¡Gracias!</div>
			<div class="notice">
				<div>IMPORTANTE:</div>
				<div>En la tabla datos se puede consultar la información nutricional de su producto, en la columna <b>"Ficha Técnica"</b> al hacer clic.</div>
			</div>
			<BR><div class="end"><table width="100%">
    <tr>
        <td width="33%">© Copyright Dmass Bussines.</td>
        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
		<td width="33%" style="text-align: right;">Congelados: Planta Campeche</td>
	</tr>
</table></div>
		</div>
	</footer>';
	
	return $footer;
}
?>
