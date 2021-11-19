new Vivus('parent', {
	duration:200, 
  type:"oneByOne"
}, after)

/* fillPath */
let count= 0
function fillPath(classname, color){
	count++
	let path = document.querySelector('.'+classname)
	path.setAttribute('class', `${classname} opacity-${count}`)
}

/* after */
function after(){
	fillPath('letter-1', 'yellow');
  fillPath('letter-2', 'yellow');
  fillPath('letter-3', 'yellow');
  fillPath('letter-4', 'yellow');
  fillPath('letter-5', 'yellow');
  fillPath('letter-6', 'yellow');
  fillPath('letter-7', 'yellow');
}





