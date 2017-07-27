var points = document.getElementById('points');
var athletenom = document.getElementById('lastname');
var athleteprenom = document.getElementById('firstname');
var btnok = document.getElementById('btnok');
var datenaissance = document.getElementById('birthdate');
var time = document.getElementById('time');

//calcul au click sur le bouton ok
btnok.onclick= points;


function resultat() {
var coeff;
var age = 2017-datenaissance.innerHTML ;

if (age>40){
    coeff=1,35;
}
else if (age>=23 && age<=40){
    coeff=1;
}
else if (age>=20 && age<=22){
    coeff=1,09;
}
else if (age==18 && age==19){
    coeff=1,18;
}
else if (age==16 && age==17){
    coeff=1,21;
}
else if (age==14 && age==15){
    coeff=1,35;
}
else if (age==12 && age==13){
    coeff=1,42;
}
else if (age==10 && age==11){
    coeff=1,5;
}
else {
    alert('L\'âge requis n\'est pas rempli' );
};
    var tempssaisi = $(this).val();
    var id         = $(this).attr("id");
    var nouveautotalpoints = Math.round(1000/tempssaisi*coeff);
    
    document.getElementById('points'+id).innerHTML = nouveautotalpoints;    
}



