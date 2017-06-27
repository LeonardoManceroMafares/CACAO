$(document).ready(function(){
	$(".eliminar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecuta.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			
		},function(e){
			alert(e);
		});
		
	});
	$(".modificar").click(function(){
		var idcategoria=$(this).parent('td').parent('tr').find('.idcategoria').val();
		var idrazon=$(this).parent('td').parent('tr').find('.idrazon').val();
		var idproveedor=$(this).parent('td').parent('tr').find('.idproveedor').val();		
		var pvp=$(this).parent('td').parent('tr').find('.pvp').val();
		var stock=$(this).parent('td').parent('tr').find('.stock').val();
		
		$.post('./ejecuta.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Id_catetogia:idcategoria,
			Id_razon:idrazon,
			Id_proveedor:idproveedor,
			Pvp:pvp,
			Stock:stock
		},function(e){
			alert(e);
		});
	});
});