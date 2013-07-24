$(function(){
 
	var tmpl, 	// Main template HTML
	tdata = {}	// JSON data object that feeds the template
 
	// Initialise page
	var initPage = function(){
 
		// Load the HTML template
		$.get(
			'template.html',
			function(d){
				tmpl = d
			}
		)											

			var renderedPage = Mustache.to_html( tmpl, "hello!!!" )
			$("body").html( renderedPage );
	}()
})