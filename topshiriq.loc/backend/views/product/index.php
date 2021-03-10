<?php

use yii\helpers\Url;

?>
<div class="row">
	<div class="col-lg-12">
		<table class="table table-bordered">
			<tr>
				<td>#</td>
				<td>Nomi</td>
				<td>Narxi</td>
				<td>Kategoriyasi</td>
				<td>Reytingi</td>
				<td>Boshqaruv</td>
			</tr>
			<?php
				$i=1;
				foreach ($mahsulotlar as $mahsulot) {
					$id = $mahsulot['id'];
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$mahsulot['nomi']."</td>";
					echo "<td>".$mahsulot['narxi']."</td>";
					echo "<td>".$mahsulot['category']."</td>";
					echo "<td>".$mahsulot['reyting']."</td>";
					echo "<td><a href='".Url::to(['product/delete', 'id' => $id])."'>O'chirish</a>, <a href='".Url::to(['product/edit', 'id' => $id])."'>Tahrir</a></td>";
					echo "</tr>";
					$i++;
				}
			?>
		</table>
	</div>
</div>