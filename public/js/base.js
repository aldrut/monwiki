/**
 * Convertit La première lettre en majuscule 
 * @param {*} obj 
 * @returns 
 */

$('input[name="firstname"]').keyup(function(evt){

console.log(evt.target.value);

    var txt = $(this).val();

    $(this).val(() => { return txt.substr(0,1).toUpperCase() + txt.substr(1)  });
});

/**
 * Convertit en majuscule 
 * @param {*} obj 
 * @returns 
 */

// $('input[name="name"]').keyup(function(evt){
//     var txt = $(this).val();

//     $(this).val(()=>{ return txt.toUpperCase( ); });
    
// });


