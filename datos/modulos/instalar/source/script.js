setTimeout(console.log.bind(console, "%c¡Detente!", "font-family:Helvetica, Arial, sans-serif; font-weight: bold; color: red; font-size: 45px; padding-top:10px;padding-bottom:10px;"));
setTimeout(console.log.bind(console, "%cEsta función del navegador está pensada para desarrolladores. Si alguien te indicó que copiaras y pegaras algo aquí para habilitar una función de sistemahostin o para hackear la cuenta de alguien, se trata de un fraude. Si lo haces, esta persona podrá acceder a tu cuenta.", "font-family: Helvetica, Arial, sans-serif; color: #444; font-size: 20px; padding-top:15px;padding-bottom:15px;"));
setTimeout(console.log.bind(console, "%cPara obtener más información, consulta 982137342", "font-family:Helvetica, Arial, sans-serif; font-weight: normal; color: #444; font-size: 20px; padding-top:15px;padding-bottom:15px;"));
$(document).ready(function(){
  let textlength
  ((item)=>{
    let items = item.split("")
    textlength = items.length-1
    items.forEach((item,index)=>{
      $(".text-holder").append(`<span class='textswipe' id='i${index}'>${item}</span`);
    })
  })("Luis lopez")
  
  function textwave(){
    $(".textswipe").each(function(index,element){
        setTimeout(function(){
            var el=element.getAttribute('id');
            $("#"+el).toggleClass("opaque");
            resetanim(index,el);
        },(index+1)*100);                
    });
}
textwave();
function resetanim(index,el){
   if(index==textlength){
     textwave();
   }
  }
});