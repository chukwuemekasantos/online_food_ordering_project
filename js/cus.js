

$(document).ready(function(){
			$(".hamburger_menu").show();
		});
		
		function hide() {
			$(".menu_item").click(function(){
				$(".hamburger_menu").fadeOut(500);
				
			});
		}

		function show(){
			$(".hamburger_container").click(function(){
					$(".hamburger_menu").show(500);
				});
			}