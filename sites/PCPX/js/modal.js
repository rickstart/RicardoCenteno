var res=0;
	var inter=0;
	var pc=0;
	var cp=0;
	var ate=0;
	function modal()
	{

		if(res)
		{	
			document.getElementById('modal1').style.visibility= 'visible';
			document.getElementById('modal1').style.top='10px';
			document.getElementById('modal1').style.left='220px';
		}
		else
		{
			document.getElementById('modal1').style.visibility= 'hidden';
		}


		if(pc)
		{	
			document.getElementById('modal2').style.visibility= 'visible';
			document.getElementById('modal2').style.top='10px';
			document.getElementById('modal2').style.left='530px';
		}
		else
		{
			document.getElementById('modal2').style.visibility= 'hidden';
		}
		

		if(inter)
		{	
			document.getElementById('modal3').style.visibility= 'visible';
			document.getElementById('modal3').style.top='200px';
			document.getElementById('modal3').style.left='60px';
		}
		else
		{
			document.getElementById('modal3').style.visibility= 'hidden';
		}

		if(cp)
		{	
			document.getElementById('modal4').style.visibility= 'visible';
			document.getElementById('modal4').style.top='50px';
			document.getElementById('modal4').style.left='380px';
		}
		else
		{
			document.getElementById('modal4').style.visibility= 'hidden';
		}

		if(ate)
		{	
			document.getElementById('modal5').style.visibility= 'visible';
			document.getElementById('modal5').style.top='250px';
			document.getElementById('modal5').style.left='650px';
		}
		else
		{
			document.getElementById('modal5').style.visibility= 'hidden';
		}


		
		
	}
		
	