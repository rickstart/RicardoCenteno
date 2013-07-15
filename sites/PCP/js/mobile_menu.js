
var inter = 0;
var emp = 0;
var per =0;
function change(obj,flag) 
{
  

  switch (flag) 
  { 
    case 1:
        
        if (inter==0) { obj.src='../images/mobile/menu/btn_pcp_roll.jpg';inter=1;}
        else{obj.src='../images/mobile/menu/btn_pcp.jpg';inter=0;}
        emp=0;
        per=0;
         document.getElementById('solempi').src= '../images/mobile/menu/btn_emp.jpg';
         document.getElementById('solperi').src= '../images/mobile/menu/btn_per.jpg';
         break 
    case 2: 
       
        if (emp==0) { obj.src='../images/mobile/menu/btn_emp_roll.jpg';emp=1;}
        else{obj.src='../images/mobile/menu/btn_emp.jpg';emp=0;}
        inter=0;
        per=0;
         document.getElementById('interi').src= '../images/mobile/menu/btn_pcp.jpg';
         document.getElementById('solperi').src= '../images/mobile/menu/btn_per.jpg';
         break 
    case 3: 
         if (per==0) { obj.src='../images/mobile/menu/btn_per_roll.jpg';per=1;}
        else{obj.src='../images/mobile/menu/btn_per.jpg';per=0;}
        inter=0;
        emp=0;
         document.getElementById('solempi').src= '../images/mobile/menu/btn_emp.jpg';
         document.getElementById('interi').src= '../images/mobile/menu/btn_pcp.jpg';
         break 
    default:
        inter=0;
        per=0;
        emp=0; 
         document.getElementById('solempi').src= '../images/mobile/menu/btn_emp.jpg';
         document.getElementById('interi').src= '../images/mobile/menu/btn_pcp.jpg';
         document.getElementById('solperi').src= '../images/mobile/menu/btn_per.jpg';
  } 
}
