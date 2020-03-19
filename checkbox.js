function toggle(source){
	var check = document.querySelectorAll('input[type="checkbox"]');
	for (var i = 0; i < check.length; i++) {
		if (check[i] != source) 
			check[i].checked = source.checked;
	}
}