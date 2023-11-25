// file for manipulating the element that feels so annoying
// list of elements to remove
elements = [
    'iframe',
    'i',
    '.pb_10',
    '.photo__caption',
    '.photo__icon.photo__icon__expand',
    'strong:has(a.inner-link-baca-juga)'
]
// execution
elements.forEach((element) => {
    let tempElement = document.querySelectorAll(element)
    let tempLength = tempElement.length
    if(tempElement > 1){
        document.querySelector(element).remove()
    }else{
        for(let i = 0; i < tempLength; i++){
            tempElement[i].remove()
        }
    }
})
function removeTextNode(element){
    let iter = document.createNodeIterator(element, NodeFilter.SHOW_TEXT)
    let textNode = ''
    while(textNode = iter.nextNode()){
        textNode.remove();
    }
}
// fixing the photos scrapped
let photos = document.querySelectorAll('.photo')
for(let i = 0; i < photos.length; i++){
    removeTextNode(photos[i])
}
