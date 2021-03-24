var elements = document.querySelectorAll('.enable-ripple');

Array.prototype.forEach.call(elements, function(button){

	button.addEventListener('click', ripple);
});

function ripple(event){


	var el = event.currentTarget;
	var rippleEl = document.querySelector('span.ripple');
	if(!rippleEl){
		rippleEl = document.createElement('span');
	} 

	el.appendChild(rippleEl);
	var max = Math.max(el.offsetWidth, el.offsetHeight);
	rippleEl.style.width = rippleEl.style.height = max +'px';
    var rect = el.getBoundingClientRect();
    rippleEl.style.left = event.clientX - rect.left - (max/2) + 'px';
    rippleEl.style.top = event.clientY - rect.top - (max/2) + 'px';
	rippleEl.classList.add('ripple');
	
}




var elements = document.querySelectorAll('.enable-ripple-base');

Array.prototype.forEach.call(elements, function(button){

	button.addEventListener('click', ripplebase);
});

function ripplebase(event){


	var el = event.currentTarget;
	var rippleEl = document.querySelector('span.ripple');
	if(!rippleEl){
		rippleEl = document.createElement('span');
	} 

	el.appendChild(rippleEl);
	var max = Math.max(el.offsetWidth, el.offsetHeight);
	rippleEl.style.width = rippleEl.style.height = max +'px';
    var rect = el.getBoundingClientRect();
    rippleEl.style.left = event.clientX - rect.left - (max/2) + 'px';
    rippleEl.style.top = event.clientY - rect.top - (max/2) + 'px';
	rippleEl.classList.add('rippleBase');
	
}