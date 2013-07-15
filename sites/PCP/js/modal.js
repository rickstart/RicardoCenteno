	var inter=0;
	var res=0;
	var gcp=0;
	var pc=0;
	var ate=0;
	var mk=0;
	var magg=0;
	
	function modal()
	{
		if(inter)
		{	
			document.getElementById('modalinter').style.visibility= 'visible';
			document.getElementById('modalinter').style.top='75px';
			document.getElementById('modalinter').style.left='44px';

		}
		else
		{
			document.getElementById('modalinter').style.visibility= 'hidden';
		}
		
		if(res)
		{	
			document.getElementById('modalres').style.visibility= 'visible';
			document.getElementById('modalres').style.top='-110px';
			document.getElementById('modalres').style.left='150px';
		}
		else
		{
			document.getElementById('modalres').style.visibility= 'hidden';
		}
		
		if(gcp)
		{	
			document.getElementById('modalgcp').style.visibility= 'visible';
			document.getElementById('modalgcp').style.top='-18px';
			document.getElementById('modalgcp').style.left='255px';
		}
		else
		{
			document.getElementById('modalgcp').style.visibility= 'hidden';
		}


		if(pc)
		{	
			document.getElementById('modalpcp').style.visibility= 'visible';
			document.getElementById('modalpcp').style.top='-140px';
			document.getElementById('modalpcp').style.left='370px';

		}
		else
		{
			document.getElementById('modalpcp').style.visibility= 'hidden';
		}


		if(ate)
		{	
			document.getElementById('modalate').style.visibility= 'visible';
			document.getElementById('modalate').style.top='150px';
			document.getElementById('modalate').style.left='450px';
		}
		else
		{
			document.getElementById('modalate').style.visibility= 'hidden';
		}

		if(mk)
		{	
			document.getElementById('modalmk').style.visibility= 'visible';
			document.getElementById('modalmk').style.top='0px';
			document.getElementById('modalmk').style.left='570px';
		}
		else
		{
			document.getElementById('modalmk').style.visibility= 'hidden';
		}
		
		if(magg)
		{	
			document.getElementById('modalmagg').style.visibility= 'visible';
			document.getElementById('modalmagg').style.top='190px';
			document.getElementById('modalmagg').style.left='650px';
		}
		else
		{
			document.getElementById('modalmagg').style.visibility= 'hidden';
		}
		
		
	}
		
	