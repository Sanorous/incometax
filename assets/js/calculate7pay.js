
var calculateForm = function (){


document.getElementById("months").value = ((Number(document.getElementById("days").value) / Number(document.getElementById("days1").value))).toFixed(9) * 1;

document.getElementById("total1").value = (Number(document.getElementById("basic").value) * Number(document.getElementById("months").value)) * 1;

//document.getElementById("months1").value = (Number(document.getElementById("months").value).toFixed(2));

//var months2 = months.toFixed(2);

//document.getElementById("basicda").value = ((Number(document.getElementById("basic").value) /30 ) * Number(document.getElementById("days").value));

};



var calculateForm1 = function (){
  document.getElementById("totalda").value = (Number(document.getElementById("total1").value) * (Number(document.getElementById("da").value)));

document.getElementById("total2").value = (Number(document.getElementById("total1").value) + (Number(document.getElementById("totalda").value) + ((Number(document.getElementById("hra").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("cca").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("gis").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("pa").value) / 30) * Number(document.getElementById("days").value)));


/*document.getElementById("total2").value = ((Number(document.getElementById("total1").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("basic").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("hra").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("cca").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("gis").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("pa").value) / 30) * Number(document.getElementById("days").value));*/

document.getElementById("total").value = Math.round(document.getElementById("total2").value);
};

var calculateForm2 = function (){
document.getElementById("total3").value = (Number(document.getElementById("old_basic").value) * Number(document.getElementById("old_da").value)) * 1;

};

var calculateForm3 = function (){

  document.getElementById("totaloldda").value = ((Number(document.getElementById("total3").value) /30 ) * Number(document.getElementById("days").value));

document.getElementById("total4").value = ((Number(document.getElementById("total3").value) + Number(document.getElementById("old_basic").value) + Number(document.getElementById("old_hra").value) +
Number(document.getElementById("old_cca").value) + Number(document.getElementById("old_gis").value) + Number(document.getElementById("old_pa").value)) / 30) * Number(document.getElementById("days").value);

document.getElementById("old_total").value = Math.round(document.getElementById("total4").value);
};


//var calculateForm4 = function (){
//document.getElementById("fhra").value = ((Number(document.getElementById("hra").value)/30) * //Number(document.getElementById("days").value)) * 1;
//};

var calculateForm4 = function (){
document.getElementById("basic2").value = ((Number(document.getElementById("basic").value) /30 ) * Number(document.getElementById("days").value)) * 1;
document.getElementById("basic1").value = ((Number(document.getElementById("old_basic").value) /30 ) * Number(document.getElementById("days").value)) * 1;
//document.getElementById("diff_basic").value = ((Number(document.getElementById("basic2").value) + (Number(document.getElementById("basic1").value)) * 1;
document.getElementById("da2").value = (Number(document.getElementById("total1").value) /30 ) * Number(document.getElementById("days").value);
document.getElementById("da1").value = (Number(document.getElementById("total3").value) /30 ) * Number(document.getElementById("days").value);
document.getElementById("hra2").value = (Number(document.getElementById("hra").value) /30 ) * Number(document.getElementById("days").value);
document.getElementById("hra1").value = (Number(document.getElementById("old_hra").value) /30 ) * Number(document.getElementById("days").value);
document.getElementById("cca2").value = (Number(document.getElementById("cca").value) /30 ) * Number(document.getElementById("days").value);
document.getElementById("cca1").value = (Number(document.getElementById("old_cca").value) /30 ) * Number(document.getElementById("days").value);
document.getElementById("gis2").value = (Number(document.getElementById("gis").value) /30 ) * Number(document.getElementById("days").value);
document.getElementById("gis1").value = (Number(document.getElementById("old_gis").value) /30 ) * Number(document.getElementById("days").value);
//document.getElementById("total_new").value = ((Number(document.getElementById("basic2").value) + (Number(document.getElementById("da2").value) + (Number(document.getElementById("hra2").value) + (Number(document.getElementById("cca2").value) + (Number(document.getElementById("gis2").value)) * 1;
//document.getElementById("total_old").value = ((Number(document.getElementById("basic1").value) + (Number(document.getElementById("da1").value) + (Number(document.getElementById("hra1").value) + (Number(document.getElementById("cca1").value) + (Number(document.getElementById("gis1").value)) * 1;
};

var calculateForm5 = function (){
document.getElementById("total10").value = ((Number(document.getElementById("basic").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("total1").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("hra").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("cca").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("gis").value) /30 ) * Number(document.getElementById("days").value));
document.getElementById("total11").value = ((Number(document.getElementById("old_basic").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("total3").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("old_hra").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("old_cca").value) /30 ) * Number(document.getElementById("days").value)) + ((Number(document.getElementById("old_gis").value) /30 ) * Number(document.getElementById("days").value));
};

var calculateForm6 = function (){
document.getElementById("diff_basic").value = ((Number(document.getElementById("basic").value) /30 ) * Number(document.getElementById("days").value)) - ((Number(document.getElementById("old_basic").value) /30 ) * Number(document.getElementById("days").value));
document.getElementById("diff_da").value = ((Number(document.getElementById("total1").value) /30 ) * Number(document.getElementById("days").value)) - ((Number(document.getElementById("total3").value) /30 ) * Number(document.getElementById("days").value));
document.getElementById("diff_hra").value = ((Number(document.getElementById("hra").value) /30 ) * Number(document.getElementById("days").value)) - ((Number(document.getElementById("old_hra").value) /30 ) * Number(document.getElementById("days").value));
document.getElementById("diff_cca").value = ((Number(document.getElementById("cca").value) /30 ) * Number(document.getElementById("days").value)) - ((Number(document.getElementById("old_cca").value) /30 ) * Number(document.getElementById("days").value));
document.getElementById("diff_gis").value = ((Number(document.getElementById("gis").value) /30 ) * Number(document.getElementById("days").value)) - ((Number(document.getElementById("old_gis").value) /30 ) * Number(document.getElementById("days").value));
};

var calculateForm7 = function (){
document.getElementById("ftotal").value = ((Number(document.getElementById("basic").value) /30 ) * Number(document.getElementById("days").value) - (Number(document.getElementById("old_basic").value) /30 ) * Number(document.getElementById("days").value)) +
((Number(document.getElementById("total1").value) /30 ) * Number(document.getElementById("days").value) - (Number(document.getElementById("total3").value) /30 ) * Number(document.getElementById("days").value)) +
((Number(document.getElementById("hra").value) /30 ) * Number(document.getElementById("days").value) - (Number(document.getElementById("old_hra").value) /30 ) * Number(document.getElementById("days").value)) +
((Number(document.getElementById("cca").value) /30 ) * Number(document.getElementById("days").value) - (Number(document.getElementById("old_cca").value) /30 ) * Number(document.getElementById("days").value)) +
((Number(document.getElementById("gis").value) /30 ) * Number(document.getElementById("days").value) - (Number(document.getElementById("old_gis").value) /30 ) * Number(document.getElementById("days").value));

document.getElementById("fftotal").value = Math.round(document.getElementById("ftotal").value);

};
