$(document).ready(function() {
  $(document).on('click', '.del-form', function(event) {
  	event.preventDefault();
  	if(!confirm('Are sure to delete this record?')){
  		return false;
  	}
  	let id = $(this).data('id');
  	$('#del-form').attr('action', $('#del-form').attr('url')+'/'+id );
  	$('#del-form').submit();
  });
});
