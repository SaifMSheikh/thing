let details_flag=0;
const show_btn_values=['Show More','Show Less'];
const toggle_details=function(){
	/*Update Values & Fetch Elements*/
	details_flag=++details_flag%2;
	const icon_boxes=document.getElementsByClassName('icon-box');
	const show_btn=document.querySelector('.show-btn');
	const callback=details_flag?_util_show_details:_util_hide_details;
	/*Update Details*/
	show_btn.innerHTML=show_btn_values[details_flag];
	for(let i=0;i<3;++i)setTimeout(callback,i*100,icon_boxes[i]);
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
