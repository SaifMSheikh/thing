let det_flg=0;
const toggle_details=function(){
	/*Update Values & Fetch Elements*/
	++det_flg;
	const icon_boxes=document.getElementsByClassName('icon-box');
	const show_btn=document.querySelector('#show-btn').style;
	const callback=det_flg%2?_util_show_details:_util_hide_details;
	/*Update Details*/
	show_btn.rotate=(det_flg*180)+'deg';
	for(let i=0;i<icon_boxes.length;++i)setTimeout(callback,i*100,icon_boxes[i]);
}
/*Callbacks & Utility Functions*/
const _util_show_details=function(elem){
	elem.classList.add('show');
	elem.classList.remove('hide');
}
const _util_hide_details=function(elem){
	elem.classList.add('hide');
	elem.classList.remove('show');
}
