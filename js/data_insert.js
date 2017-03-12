$(document).ready(function () {

    //this will fire once the page has been fully loaded
<<<<<<< HEAD
    
    $( '#data-post-btn' ).click( function(){
        
        //data inserted in the gas area
        var _gas_data = $( '#post-gas-data' ).val();
        //data inserted in the water area
        var _water_data = $( '#post-water-data' ).val();
        //data inserted in the ellectro area
        var _ellectro_data = $( '#post-ellectro-data' ).val();


        if( _gas_data.length > 0 && _water_data.length > 0 && _ellectro_data.length > 0 ){

            console.log( _gas_data + " " + _water_data + " " + _ellectro_data );


        }



        $( '#post-gas-data' ).val("");
        $( '#post-water-data' ).val("");
        $( '#post-ellectro-data' ).val("");
=======

    $('#data-post-btn').click(function () {

        //data inserted in the gas area
        var _gas_data = $('#post-gas-data').val();
        //data inserted in the water area
        var _water_data = $('#post-water-data').val();
        //data inserted in the ellectro area
        var _ellectro_data = $('#post-ellectro-data').val();


        if (_gas_data.length > 0 && _water_data.length > 0 && _ellectro_data.length > 0) {

            console.log(_gas_data + " " + _water_data + " " + _ellectro_data);
        }


        $('#post-gas-data').val("");
        $('#post-water-data').val("");
        $('#post-ellectro-data').val("");
>>>>>>> 7ded166b434c35585967c1a8fa36652db8e33661
    });

});
