//MASCARA DO TELEFONE
var mascara = function (val) {
	return val.replace(/\D/g, "").length === 11
		? "(00) 00000-0000"
		: "(00) 0000-00009";
},
options = {
	onKeyPress: function (val, e, field, options) {
		field.mask(mascara.apply({}, arguments), options);
	},
};