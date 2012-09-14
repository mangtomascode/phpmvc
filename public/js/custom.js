$(document).ready(function(){
	
$('#go_st').click(function(e){
	alert(1);
});

$('#stud_reg').click(function(e){
	num = $('#studn').val();
	fn = 	$('#studfn').val();
	cn = $('#studcn').val();
	sec = $('#studsec').val();
	
	if(num=="" || fn =="" || cn=="" || sec==""){
		alert('All fields are required*');
	}else{
	
	$.post('http://localhost/library/books/borrow',{submit:'true',sn:num,fname:fn,con:cn,section:sec},function(result){
			$('#cntnr').html(result);
	});
	}
});
	$('#inpt-search').keyup(function(){
		theval = $(this).val();
		if(theval==""){
			return false;
		}else{
		$.post('http://localhost/library/books/search',{search:theval},function(result){
		
			$('#search-res').html(result);
			
		});
		}
	});
	
	$('#search-btn').click(function(){
		var x = $('#inpt-search').val();
		alert(x);
	});
	
	$('#search-ressdf').click(function(e) {
	alert(1);
	// Button which will activate our modal
			   /*	$('#modal').reveal({ // The item which will be opened with reveal
				  	animation: 'fade',                   // fade, fadeAndPop, none
					animationspeed: 100,                       // how fast animtions are
					closeonbackgroundclick: true,              // if you click background will modal close?
					dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
				});
				$('.yes').attr('id',this.id);
			return false;
			*/
	});
	
	$('.yes').click(function(event){
	event.preventDefault();
	var id = this.id;
	id = id.replace('del-','');
		$.post('http://localhost/library/books/del',{del:id,tbl:'false'},function(result){
			if(result=='tbl'){
			$('#del-id-'+id).parent().parent().remove();
			
			}else{
			$('#del-id-'+id).parent().remove();
			
			}
			
		});
	
	});
	
});

function del_item(id){
		$('#modal').reveal({ // The item which will be opened with reveal
				  	animation: 'fade',                   // fade, fadeAndPop, none
					animationspeed: 100,                       // how fast animtions are
					closeonbackgroundclick: true,              // if you click background will modal close?
					dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
	});
	
	$('.yes').attr('id','del-'+id);
	
}

