//Variables
const MENU=document.querySelector('#Menu');

const CONTENT=document.querySelector('#content');
const ITEMLIST=document.querySelectorAll('#item')
const EDITBUTTON=document.querySelectorAll('#edit');
EDITBUTTON.innerHTML="Edit"
// console.log("Testing"+MENU)
//Test to Edit


//  EDITBUTTON.forEach(EDITBUTTON=>{
//     EDITBUTTON.addEventListener('click',()=>{
//         ITEMLIST.removeAttribute('readonly')
//         EDITBUTTON.innerText="Save";
//      })
//  })



// Loop through each edit button
EDITBUTTON.forEach((button,index) => {
    button.addEventListener('click', () => {
        // Toggle the "readonly" attribute of the ITEMLIST
        ITEMLIST[index].readOnly = !ITEMLIST[index].readOnly;

        // Change the text of the button based on the state of ITEMLIST
        button.innerText = ITEMLIST[index].readOnly ? 'Edit' : 'Save';
    });
});





 

//Add Menu Items



//Disable or remove menu items from display




//Edit Menu Items from display