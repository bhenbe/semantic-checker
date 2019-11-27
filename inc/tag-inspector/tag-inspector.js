function tagInspector(selector = '') {
	this.render(selector);
};
	
tagInspector.prototype.render = function(selector){
	let nodes = this.getNodes(selector)
	for (let node in nodes) {
		let tag = nodes[node].tagName;
		if ((tag != undefined) && (tag != 'SCRIPT'))
			this.renderTag(nodes[node], tag);
	}
}
	
tagInspector.prototype.getNodes = function(selector) {
	if (selector === '')
		selector = 'body';
	return document.querySelectorAll(selector + " *");
}
	
tagInspector.prototype.renderTag = function(item, tag) {
	let classes = item.classList.toString().trim();
	if (classes !== '') {
		classes = '.' + classes;
		classes = classes.replace(' ', ' .');
		classes = ' - ' + classes;
	}
	item.setAttribute('data-tag', tag + classes);
	item.setAttribute('title', tag + classes);
	item.classList.add('tag-inspect-item');

	console.log(tag);
	
	if (tag === 'img')
		console.log(item.innerHTML());
}
