AOS.init();

let monome = document.getElementById('monome')
alert(monome)
let binome = document.getElementById('binome')
let form_block_1 = document.querySelector(".form-block-1")
let form_block_2 = document.querySelector(".form-block-2")
let form_block_3 = document.querySelector(".form-block-3")
let return_a1 = document.querySelector(".form-block-2 a")
let body = document.querySelector("body")
let return_a2 = document.querySelector(".form-block-3 a")
let invalid2=document.querySelectorAll(".form-block-2 .invalid-feedback");
let invalid3=document.querySelectorAll(".form-block-3 .invalid-feedback");

    

    if(invalid2.length>0)
    {
        form_block_1.classList.add("d-none")
        form_block_2.classList.remove('d-none')
    }else if(invalid3.length>0)
    {
        form_block_1.classList.add("d-none")
        form_block_3.classList.remove('d-none')
    }


monome.addEventListener('input', function(){
    
    form_block_1.classList.add("d-none")
    form_block_2.classList.remove("d-none")
    
})

binome.addEventListener('input',function(){
    form_block_1.classList.add("d-none")
    form_block_3.classList.remove("d-none")

})

return_a1.addEventListener("click", function(){
    form_block_1.classList.remove("d-none")
    form_block_2.classList.add('d-none')
})
return_a2.addEventListener("click", function(){
    form_block_1.classList.remove("d-none")
    form_block_3.classList.add('d-none')
})
let inputs = document.querySelectorAll(".input-field")
console.log(inputs)
let notices  = document.querySelectorAll(".input-notice")
for(let i=0, c = inputs.length; i<c; i++){
    inputs[i].addEventListener('change', function(){
        
        notices[i].classList.remove('d-none')
    })
}     
  