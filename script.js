var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
	event.preventDefault()
	tabTrigger.show()
  })
})



function imgEnlarge(e){

	if(e.style.width=="300px" || e.style.width=="" ){
		e.style.width="1000px";
	}
	else{
		e.style.width="300px";
	}

	var imgLength = document.getElementsByTagName('ahnentafel').length;

	for(var i = 0; i<imgLength; i++){
		if(document.getElementsByTagName('ahnentafel')[i].id==  e.id){
			continue;
		}
		document.getElementsByTagName('ahnentafel')[i].style.width="300px";

	}
}