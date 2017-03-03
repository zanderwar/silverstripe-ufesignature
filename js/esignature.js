jQuery.entwine(
	"esignature", 
	function($) {
		$("input.esignature").entwine(
			{
				onmatch: function() {
					var input = this;
					var canvas = $('<canvas></canvas>');

					input.after(canvas);
					var esignature = new SignaturePad(canvas[0]);
					if(this.val() != '') {
						esignature.fromDataURL(this.val());
					}
					esignature.onEnd = function() { 
						input.val(esignature.toDataURL());
					}

					var clearSig = $('<button class="esignature-clear">Clear</button>');
					
					clearSig.click(
						function(e) { 
							e.preventDefault();
							esignature.clear();
							input.val('');
						}
					);

					canvas.after(clearSig);		
				},
			}
		);
	}
);

