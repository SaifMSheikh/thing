/*Callbacks & Utility Functions*/
const _style_courier_italic_grey=function(style){
	style.color='grey';
	style.fontStyle='italic';
	style.fontFamily='Verdana';
	style.fontWeight='normal';
}
const _style_bold_green=function(style){
	style.color='#649064';
	style.fontWeight='bold';
	style.fontStyle='normal';
	style.fontFamily='Courier';
}
const _style_default=function(style){
	style.color='#355c34';
	style.fontStyle='normal';
	style.fontWeight='normal';
	style.fontFamily='Arial,sans-serif';
}
/*********/
let style_idx=0;/*0:Italic Grey/1:Bold Green*/
const styles=[_style_courier_italic_grey,_style_bold_green];
const toggle_style=function(){
	/*Update Values & Fetch Elements*/
	style_idx=++style_idx%styles.length;
	const quotes=document.getElementsByClassName('quote');
	/*Update Style*/
	for(let i=0;i<quotes.length;++i)
		styles[style_idx](quotes[i].style);
	/*Reset Button Animation*/
}
const reset_style=function(){
	/*Update Values & Fetch Elements*/
	style_idx=0;
	const quotes=document.getElementsByClassName('quote');
	const rst_btn=document.querySelector('#reset-btn')
	/*Update Style*/
	for(let i=0;i<quotes.length;++i)
		_style_default(quotes[i].style);
	rst_btn.classList.add('rotate-360');
	rst_btn.classList.remove('rotate-360');
}
