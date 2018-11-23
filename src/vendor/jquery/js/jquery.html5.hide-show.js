(function(){
// jQuery hide() and show() supporting HTML5 hidden attribute
// "All HTML elements may have the hidden content attribute set. The hidden
// attribute is a boolean attribute. When specified on an element, it indicates
// that the element is not yet, or is no longer, relevant. User agents should
// not render elements that have the hidden attribute specified."
// http://www.whatwg.org/specs/web-apps/current-work/multipage/editing.html#the-hidden-attribute
// Pointers from http://www.bennadel.com/blog/1624-Ask-Ben-Overriding-Core-jQuery-Methods.htm
	
var originalHide = jQuery.fn.hide;
jQuery.fn.hide = function(duration, callback){
	if(!duration){
		originalHide.apply(this, arguments);
		this.attr('hidden', 'hidden');
	}
	else {
		var that = this;
		originalHide.apply(this, [duration, function(){
			that.attr('hidden', 'hidden');
			if(callback){
				callback.call(that);
			}
		}]);
	}
	return this;
};

var originalShow = jQuery.fn.show;
jQuery.fn.show = function(duration, callback){
	if(!duration){
		originalShow.apply(this, arguments);
		this.removeAttr('hidden');
	}
	else {
		var that = this;
		originalShow.apply(this, [duration, function(){
			that.removeAttr('hidden');
			if(callback){
				callback.call(that);
			}
		}]);
	}
	return this;
};

})();