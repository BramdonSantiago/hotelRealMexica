$(document).ready(function() {
    $('.date-picker').dateDropper();
    $('.date-picker').dateDropper('set',{ 
        // modal: true,
        format: "Y-m-d", 
        lang: "es",
        large: true,
        minYear: 2020,
        maxYear: 2021,
        theme: "style-datedropper",
    });
});