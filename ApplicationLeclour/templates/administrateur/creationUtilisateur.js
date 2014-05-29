   
//fonction desactivation des tooltips

   function deactivateTooltips() {
    
        var spans = document.getElementsByTagName('span'),
        spansLength = spans.length;
        
        for (var i = 0 ; i < spansLength ; i++) {
            if (spans[i].className == 'tooltip') {
                spans[i].style.display = 'none';
            }
        }
    }
	
	function keyupPwd()
		{
			var span = pass[0].nextSibling.nextSibling;
			if (pass[0].value.length<3 || pass[0].value.length>10){
				console.log(pass[0]);
				span.style.display = 'inline-block';
				}
			else span.style.display = 'none';
			
	
		}
		
		function keyupPwdConf()
		{
			var span = pass[0].nextSibling.nextSibling;
			var spanConf = passConf[0].nextSibling.nextSibling;
						
			if (pass[0].value == passConf[0].value){
				spanConf.style.display = 'inline-block';
				console.log(passConf[0])
				}		
			else span.style.display = 'none';
			
		}
	
	deactivateTooltips();
	
	var pass = document.getElementsByName("password");
	var passConf = document.getElementsByName("passwordConf");
	pass[0].onkeyup = keyupPwd;
	passConf[0].onkeyup = keyupPwdConf;
	
	


	
