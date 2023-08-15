function det2(a11,a12,a21,a22){
	det = a11*a22 - a12*a21;
	return det;
}

function deter2(){
	t = document.getElementsByName('a');
	a11 = parseInt(t[0].value);
	a12 = parseInt(t[1].value);
	a21 = parseInt(t[2].value);
	a22 = parseInt(t[3].value);
	det = det2(a11,a12,a21,a22);
	disp = "Determinant of given matrix is: "+det;
	document.getElementById('deter').style.display = 'block';
	document.getElementById("deter").innerHTML = disp;
}

function trans2(){
	t = document.getElementsByName('a');
	a11 = parseInt(t[0].value);
	a12 = parseInt(t[1].value);
	a21 = parseInt(t[2].value);
	a22 = parseInt(t[3].value);
	r = document.getElementsByName('b');
	document.getElementById('transpose').style.display = 'block';
	r[0].value = a11;
	r[1].value = a21;
	r[2].value = a12;
	r[3].value = a22;
}

function inv2(){
	t = document.getElementsByName('a');
	a11 = parseInt(t[0].value);
	a12 = parseInt(t[1].value);
	a21 = parseInt(t[2].value);
	a22 = parseInt(t[3].value);
	det = a11*a22 - a12*a21;
	r = document.getElementsByName('i');
	f = document.getElementById('inverse');
	f.style.display = 'block';
	if (det == 0){
		f.innerHTML = "<br>Since Determinant is ZERO, Inverse does not exist and Matrix is SINGULAR";
	
	} else {
		r[0].value = a22/det;
		r[1].value = -a12/det;
		r[2].value = -a21/det;
		r[3].value = a11/det;
	}
}

function det3(a11,a12,a13,a21,a22,a23,a31,a32,a33){
	t1 = a11*det2(a22,a23,a32,a33);
	t2 = -a12*det2(a21,a23,a31,a33);
	t3 = a13*det2(a21,a22,a31,a32);
	return t1+t2+t3;
}
function deter3(){
	t = document.getElementsByName('a');
	a11 = parseInt(t[0].value);
	a12 = parseInt(t[1].value);
	a13 = parseInt(t[2].value);
	a21 = parseInt(t[3].value);
	a22 = parseInt(t[4].value);
	a23 = parseInt(t[5].value);
	a31 = parseInt(t[6].value);
	a32 = parseInt(t[7].value);
	a33 = parseInt(t[8].value);
	det = det3(a11,a12,a13,a21,a22,a23,a31,a32,a33);
	disp = "Determinant of given matrix is: "+det;
	document.getElementById('deter').style.display = 'block';
	document.getElementById("deter").innerHTML = disp;
}

function tr3(a11,a12,a13,a21,a22,a23,a31,a32,a33){
	return new Array(a11,a21,a31,a12,a22,a32,a13,a23,a33);
}

function trans3(){
	t = document.getElementsByName('a');
	a11 = parseInt(t[0].value);
	a12 = parseInt(t[1].value);
	a13 = parseInt(t[2].value);
	a21 = parseInt(t[3].value);
	a22 = parseInt(t[4].value);
	a23 = parseInt(t[5].value);
	a31 = parseInt(t[6].value);
	a32 = parseInt(t[7].value);
	a33 = parseInt(t[8].value);
	tr = tr3(a11,a12,a13,a21,a22,a23,a31,a32,a33);
	r = document.getElementsByName('b');
	document.getElementById('transpose').style.display = 'block';
	r[0].value = tr[0];
	r[1].value = tr[1];
	r[2].value = tr[2];
	r[3].value = tr[3];
	r[4].value = tr[4];
	r[5].value = tr[5];
	r[6].value = tr[6];
	r[7].value = tr[7];
	r[8].value = tr[8];
}

function cofact3(a11,a12,a13,a21,a22,a23,a31,a32,a33){
	r1 = det2(a22,a23,a32,a33);
	r2 = -det2(a21,a23,a31,a33);
	r3 = det2(a21,a22,a31,a32);
	r4 = -det2(a12,a13,a32,a33);
	r5 = det2(a11,a13,a31,a33);
	r6 = -det2(a11,a12,a31,a32);
	r7 = det2(a12,a13,a22,a23);
	r8 = -det2(a11,a13,a21,a23);
	r9 = det2(a11,a12,a21,a22);
	r = new Array(r1,r2,r3,r4,r5,r6,r7,r8,r9);
	return r;
}

function inv3(){
	t = document.getElementsByName('a');
	a11 = parseInt(t[0].value);
	a12 = parseInt(t[1].value);
	a13 = parseInt(t[2].value);
	a21 = parseInt(t[3].value);
	a22 = parseInt(t[4].value);
	a23 = parseInt(t[5].value);
	a31 = parseInt(t[6].value);
	a32 = parseInt(t[7].value);
	a33 = parseInt(t[8].value);
	cof = cofact3(a11,a12,a13,a21,a22,a23,a31,a32,a33);
	adj = tr3(cof[0],cof[1],cof[2],cof[3],cof[4],cof[5],cof[6],cof[7],cof[8]);
	det = det3(a11,a12,a13,a21,a22,a23,a31,a32,a33);
	f = document.getElementById('inverse')
	f.style.display = 'block';
	if (det == 0){		
		f.innerHTML = "<br>Since Determinant is ZERO, Inverse does not exist and Matrix is SINGULAR";
		}
	else{
		r = document.getElementsByName('i');
		r[0].value = adj[0]/det;
		r[1].value = adj[1]/det;
		r[2].value = adj[2]/det;
		r[3].value = adj[3]/det;
		r[4].value = adj[4]/det;
		r[5].value = adj[5]/det;
		r[6].value = adj[6]/det;
		r[7].value = adj[7]/det;
		r[8].value = adj[8]/det;
	}	
}