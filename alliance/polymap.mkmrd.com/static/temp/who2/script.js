 $(function(){

                    var iframeGraph = $("#iframeGraph");
                    iframeGraph.height(iframeGraph.width() * 0.8);

                    var iframePillar = $("#iframePillar");
                    iframePillar.height(iframePillar.width() * 0.8);

                    var iframeCircular= $("#iframeCircular");
                    iframeCircular.height(iframeCircular.width() * 0.8);

                   
                 });

                window.fr_focus_circular = function(){
                    var wn = document.getElementById('iframeCircular').contentWindow;
                    // postMessage arguments: data to send, target origin
                    console.log("doing this");
                    //setTimeout(function(){
                    wn.postMessage("fr_focus_circular", "*");
                    //},1000);
                }

				window.fr_circular_reset = function(){
			     var wn = document.getElementById('iframeCircular').contentWindow;	
				wn.postMessage("fr_reset", "*");	
				}

                window.fr_focus_pillar = function(){
                    var wn = document.getElementById('iframePillar').contentWindow;
                    // postMessage arguments: data to send, target origin
                    console.log("doing this");
                    //setTimeout(function(){
                    wn.postMessage("fr_focus_pillar", "*");
                    //},1000);
                }

				window.fr_pillar_reset = function(){
			     var wn = document.getElementById('iframePillar').contentWindow;	
				wn.postMessage("fr_reset", "*");	
				}

                window.fr_focus_graph = function(){
                    var wn = document.getElementById('iframeGraph').contentWindow;
                    // postMessage arguments: data to send, target origin
                    console.log("doing this");
                    //setTimeout(function(){
                    wn.postMessage("fr_focus_graph", "*");
                    //},1000);
                }

               window.fr_graph_reset = function(){
			     var wn = document.getElementById('iframeGraph').contentWindow;		
				wn.postMessage("fr_reset", "*");	
				}
				
                
          
  $(function(){
  var animations = [
{
            selector: "#iframePillar",            
            startingLeft: null,
            startingWidth: null,
            startingHeight: null,
            focusFunction: "fr_focus_pillar",
            resetFunction:"fr_pillar_reset",
            shown:false,
        },{
            selector: "#iframeGraph",            
            startingLeft: null,
            startingWidth: null,
            startingHeight: null,
            focusFunction: "fr_focus_graph",
            resetFunction:"fr_graph_reset",
            shown:false,
        },
        {
            selector: "#iframeCircular",            
            startingLeft: null,
            startingWidth: null,
            startingHeight: null,
            focusFunction: "fr_focus_circular",
		    resetFunction:"fr_circular_reset",
            shown:false,
        },
       
    ];

/*
 
*/

window.animations = animations;

    
    animations.forEach(function (element) {
        element.startingHeight = $(element.selector).height();
        element.startingWidth = $(element.selector).width();
    });
    
    function handleMessage(e){
        //console.log("parent e", e);
        animations.forEach(function(item){
            if (item.focusFunction == e.data){
                console.log("found it!", item);
                item.shown = true;
            }
        });
    };

    if (window.addEventListener) {
        window.addEventListener('message', handleMessage, false);
    } else if (window.attachEvent) { // ie8
        window.attachEvent('onmessage', handleMessage);
    }


    $(window).scroll(function () {
        //this.console.log("scroll");
        animations.forEach(function (element) {

            var clientRect = document.querySelector(element.selector).getBoundingClientRect();
            var innerHeight = window.innerHeight;
            element.scrollingAreaHeight = -Math.abs($(element.selector).height());

            var breakPoint = 0 + ($(element.selector).height());


            //console.log(clientRect.y,-Math.abs(element.scrollingAreaHeight));
            if (clientRect.y < breakPoint) {
                if (clientRect.y < element.scrollingAreaHeight) {
                    //console.log("after3", clientRect.y, element.scrollingAreaHeight, breakPoint);
                    //setElementAfterScrolling(element);
                    //element.animateFunction(1);                  	
					element.shown = false;
                } else {
                    //console.log("during2", clientRect.y);
                    if (!element.shown){
                        try{
                            window[element.focusFunction]();
                          console.log("loading function");
                        }
                        catch {
                            console.log("couldn't load yet");
                        }
                    }
                    
                    //setElementHoldingScrolling(element);
                    //var percent = Math.abs(clientRect.y) / (element.scrollingAreaHeight - element.startingHeight);
                    //element.animateFunction(percent);
                }
            }
            if (clientRect.y > breakPoint) {
                //console.log("before1", clientRect.y, element.scrollingAreaHeight, breakPoint);
                //setElementBeforeScroll(element);
                //element.animateFunction(0);
				//if (element.shown = true) {
				////	console.log("run reset");
				//	element.shown = false;
			   	//	window[element.resetFunction]();
				//}
            }
			
			var topOutOfView = clientRect.y + clientRect.height;

			var bottomOutofView = clientRect.y - window.innerHeight;

			if (topOutOfView < 0) {
				//console.log("out of view up top",topOutOfView);
				window[element.resetFunction]();
				element.shown = false;
			}
			if (bottomOutofView > 0) {
				//console.log("out of view bottom",bottomOutofView);
				window[element.resetFunction]();
				element.shown = false;
			}
        });
    });
  });