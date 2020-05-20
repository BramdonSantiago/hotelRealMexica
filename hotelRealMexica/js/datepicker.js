$(document).ready(function() {


    let datePicker = $(".date-picker");
    
    datePicker.datepicker({
        // changeMonth: true,
        dateFormat: "dd/mm/yy",
	    dayNamesMin: [ "Dom","Lun","Mar","Mié","Jue","Vie","Sáb" ],
        monthNames: [ "Enero","Febrero","Marzo","Abril","Mayo","Junio",
                        "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre" ],
        minDate: 0, 
        maxDate: "+12M",
        // onSelect: function (date) {
        //     alert(date)
        // }

    });  
});