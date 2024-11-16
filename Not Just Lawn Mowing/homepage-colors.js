let col_flg=1;//1=Light/0=Dark
const btn_cols=['#647064','#A9C857'];
const toggle_color_scheme=function(){
	/*Update Values & Fetch Elements*/
	col_flg=++col_flg%2;
	const section=document.querySelector('.about-us-body');
	const col_btn=document.querySelector('#color-btn');
	const callback=col_flg?_util_set_colors_light:_util_set_colors_dark;
	/*Update Color Scheme*/
	callback(section);
	col_btn.setAttribute('fill',btn_cols[col_flg]);
}
/*Callbacks & Utility Functions*/
const _util_set_colors_light=function(elem){
	elem.classList.add('colors-light');
	elem.classList.remove('colors-dark');
}
const _util_set_colors_dark=function(elem){
	elem.classList.add('colors-dark');
	elem.classList.remove('colors-light');
}
