
/**
* Theme: SimpleAdmin Template
* Author: Coderthemes
* Form Advanced
*/


// Select2
$(".select2").select2();

jQuery('.timepicker').timepicker({
    defaultTIme: false,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});
// Time Picker
jQuery('#timepicker').timepicker({
    defaultTIme: false,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});
jQuery('#timepicker2').timepicker({
    showMeridian: false,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});
jQuery('#timepicker3').timepicker({
    minuteStep: 15,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});

//colorpicker start

$('.colorpicker-default').colorpicker({
    format: 'hex'
});
$('.colorpicker-rgba').colorpicker();

// Date Picker
jQuery('#datepicker').datepicker();
jQuery('.datepicker').datepicker();
jQuery('#datepicker-autoclose').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#datepicker-inline').datepicker();
jQuery('#datepicker-multiple-date').datepicker({
    format: "mm/dd/yyyy",
    clearBtn: true,
    multidate: true,
    multidateSeparator: ","
});
jQuery('#date-range').datepicker({
    toggleActive: true
});

//Clock Picker
$('.clockpicker').clockpicker({
    donetext: 'Done'
});

$('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});
$('#check-minutes').click(function (e) {
    // Have to stop propagation here
    e.stopPropagation();
    $("#single-input").clockpicker('show')
        .clockpicker('toggleView', 'minutes');
});


//Date range picker
$('.input-daterange-datepicker').daterangepicker({
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-success',
    cancelClass: 'btn-default'
});
$('.input-daterange-timepicker').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
        format: 'MM/DD/YYYY h:mm A'
    },
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-success',
    cancelClass: 'btn-default'
});
$('.input-limit-datepicker').daterangepicker({
    format: 'MM/DD/YYYY',
    minDate: '06/01/2015',
    maxDate: '06/30/2015',
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-success',
    cancelClass: 'btn-default',
    dateLimit: {
        days: 6
    }
});

$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

$('#reportrange').daterangepicker({
    format: 'MM/DD/YYYY',
    startDate: moment().subtract(29, 'days'),
    endDate: moment(),
    minDate: '01/01/2012',
    maxDate: '12/31/2015',
    dateLimit: {
        days: 60
    },
    showDropdowns: true,
    showWeekNumbers: true,
    timePicker: false,
    timePickerIncrement: 1,
    timePicker12Hour: true,
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    opens: 'left',
    drops: 'down',
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-success',
    cancelClass: 'btn-default',
    separator: ' to ',
    locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Cancel',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
    }
}, function (start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
});


$(document).ready(function(){
    
$( ".places").autocomplete({
   source: ["அரியலூர்", "செந்துறை", "உடையார்பாளையம்", "ஆண்டிமடம்","சென்னை", "அமைந்தக்கரை", "அயனாவரம்", "சேத்துப்பட்டு",
    "பெரியமேடு", "கிண்டி", "மாம்பலம்",  "மயிலாப்பூர்", "பெரம்பூர்",                                            
     "புரசைவாக்கம்",  "வேளச்சேரி","கோயம்புத்தூர்", "கோயம்புத்தூர் வடக்கு", "அன்னூர்", "கோயம்புத்தூர் தெற்கு",
"மேட்டுப்பாளையம் ", "பொள்ளாச்சி ",  "கிணத்துக்கடவு", "பேரூர்", "வால்பாறை",                                                                                          
"சூலூர்", "மதுக்கரை ", "கடலூர்",  "பண்ருட்டி",  "சிதம்பரம்","காட்டுமன்னார்கோயில்","குறிஞ்சிப்பாடி","திட்டக்குடி", "விருத்தாச்சலம்","தருமபுரி", "பாலக்கோடு", "பென்னாகரம்", "அரூர்",
"பாப்பிரெட்டிப்பட்டி","காரிமங்கலம்", "நல்லம்பள்ளி","திண்டுக்கல்", "ஆத்தூர்", "திண்டுக்கல் மேற்கு", "திண்டுக்கல் கிழக்கு", "கொடைக்கானல்", "நத்தம்", "ஒட்டன்சத்திரம்","நிலக்கோட்டை", "பழனி",
"வேடசந்தூர்","ஈரோடு","அந்தியூர்","பவானி", "கோபிச்செட்டிப்பாளையம்", "பெருந்துறை", "சத்தியமங்கலம்","காஞ்சிபுரம்", "ஆலந்தூர்", "செங்கல்பட்டு", "செய்யூர்", "மதுராந்தகம்", "சோழிங்கநல்லூர்", "ஸ்ரீபெரும்புதூர்", "தாம்பரம்", "திருப்போரூர்", "திருக்கழுகுன்றம்", "உத்திரமேரூர்", "வாலாஜாபாத்","கன்னியாகுமரி","அகத்தீஸ்வரம்","கல்குளம்", "விளவங்கோடு", "தோவாளை","கரூர்", "அரவக்குறிச்சி", "கடவூர்", "கிருஷ்ணராயபுரம்","குளித்தலை","கிருஷ்ணகிரி", "ஓசூர்", "போச்சம்பள்ளி",  "ஊத்தங்கரை", "தேன்கனிக்கோட்டை","மதுரை","மதுரை வடக்கு", "மதுரை தெற்கு", "மதுரை தெற்கு", "மேலூர்", "பேரையூர்", "திருமங்கலம்", "உசிலம்பட்டி", "வாடிப்பட்டி","நாகப்பட்டினம்","கீழ்வேலூர்", "குத்தாலம்", "மயிலாடுதுறை", "சீர்காழி","தரங்கம்பாடி"," திருக்குவளை", "வேதாரண்யம்","நாமக்கல்","கொல்லிமலை", "பரமத்தி-வேலூர்", "திருச்செங்கோடு", "இராசிபுரம்","நீலகிரி","குன்னூர்", "கூடலூர்", "கோத்தகிரிகுந்தா ", "பந்தலூர்", "உதகமண்டலம்","பெரம்பலூர்","ஆலத்தூர்", "குன்னம்", "வேப்பந்தட்டை","புதுக்கோட்டை","ஆலங்குடி", "அறந்தாங்கி", "ஆவுடையார்கோயில்", "கந்தர்வக்கோட்டை", "இலுப்பூர்", "குளத்தூர்","மணமேல்குடி", "திருமயம்","பொன்னமராவதி","இராமநாதபுரம்","கடலாடி", "கமுதி",  "முதுகுளத்தூர்","பரமக்குடி",  "இராமேஸ்வரம்","திருவாடானை","சேலம்","ஆத்தூர்", "எடப்பாடி", "ஓமலூர்", "கங்கவள்ளி", "மேட்டூர்", "சங்ககிரி","வாழப்பாடி","ஏற்காடு","சிவகங்கை", "தேவகோட்டை", "இளையான்குடி", "மானாமதுரை", "காரைக்குடி", "சிவகங்கை", "திருப்புவனம்", "திருப்பத்தூர்","தஞ்சாவூர்", "கும்பகோணம்", "ஒரத்தநாடு", "பாபநாசம்","பட்டுக்கோட்டை",   
 "பேராவூரணி", "திருவிடைமருதூர்", "திருவையாறு","தேனி", "பெரியகுளம்", "ஆண்டிபட்டி", "போடிநாயக்கனூர்", "உத்தமபாளையம்","தூத்துக்குடி","எட்டையபுரம்","ஒட்டபிடாரம்", "கோவில்பட்டி","ஸ்ரீவைகுண்டம்", "சாத்தான்குளம்","திருச்செந்தூர்", "விளாத்திக்குளம்"," திருச்சிராப்பள்ளி","இலால்குடி", "மணச்சநல்லூர்"," மணப்பாறை ","முசிறி",  
"திருவரங்கம்", "திருவெறும்பூர்","தொட்டியம்","துறையூர்","திருநெல்வேலி", "ஆலங்குளம்","அம்பாசமுத்திரம்", "நான்குநேரி", "பாளையங்கோட்டை","சங்கரன்கோயில்", "தென்காசி", "கடையநல்லூர் ",   "செங்கோட்டை "," ராதாபுரம்", "சிவகிரி", "வீரகேரளம்புதூர்","திருப்பூர்", "அவினாசி","பல்லடம்", "தாராபுரம்", "காங்கேயம்","மடத்துக்குளம்","உடுமலைப்பேட்டை","திருவள்ளூர்","அம்பத்தூர்","ஆவடி", "கும்மிடிப்பூண்டி", "மாதவரம்", "மதுரவாயல்", "பள்ளிப்பட்டு", "பொன்னேரி", "பூந்தமல்லி", "திருத்தணி",
"திருவள்ளூர்", "திருவொற்றியூர்", "ஊத்துக்கோட்டை","திருவண்ணாமலை","ஆரணி", "செங்கம்","போளூர்","செய்யார்","தண்டராம்பட்டு","வந்தவாசி","திருவாரூர்", "குடவாசல்", "மன்னார்குடி", "நன்னிலம்", "நீடாமங்கலம்", "திருத்துறைப்பூண்டி", "வலங்கைமான்","வேலூர்","ஆம்பூர்", "அரக்கோணம்", "ஆற்காடு", "குடியாத்தம்"," காட்பாடி", "திருப்பத்தூர்", "வாணியம்பாடி","வாலாஜாபேட்டை","விழுப்புரம்","செஞ்சி","கள்ளக்குறிச்சி","சங்கரபுரம்","திண்டிவனம்","உளுந்தூர்பேட்டை", "திருக்கோயிலூர்", "வானூர்", "விக்கிரவாண்டி","விருதுநகர்","அருப்புக்கோட்டை", "இராஜபாளையம்", "சாத்தூர்", "காரியாபட்டி", "சிவகாசி", "ஸ்ரீவில்லிப்புத்தூர்","திருச்சுழி"],

appendTo:$(".places").parent()
	
});
});