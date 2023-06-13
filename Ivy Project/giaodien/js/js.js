/*js kéo chuột xuống thanh menu màu như dưới */
const header=document.querySelector("header")
window.addEventListener("scroll", function(){
x=window.pageYOffset
// console.log(x) //lệnh ktra xem chạy chưa
if(x>0){
    header.classList.add("sticky")
}
else{
    header.classList.remove("sticky")
}
})

// js hiệu hứng trượt ảnh
const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem =document.querySelectorAll('.dot')
let imgNuber = imgPosition.length
// lúc đầu index bằng 0, sau đó sau 5s hàm chạy 1 lần, hàm đó tăng thêm 1, thì thẻ cha sang bên trai âm tương ứng các thẻ con
let index = 0
imgPosition.forEach(function(image,index){
    image.style.left = index*100 + "%"
    dotItem[index].addEventListener("click",function(){
// hàm click tương ứng ảnh
    slider(index)
    })
})
function imgSlide (){
index++;
console.log(index)
if (index>=imgNuber) {index=0}
slider(index)
}
function slider (index){
imgContainer.style.left = "-" +index*100+ "%"
const dotActive = document.querySelector('.active') // js ảnh theo con trỏ tròn và chạy theo con trỏ tròn
dotActive.classList.remove("active") // js ảnh theo con trỏ tròn và chạy theo con trỏ tròn
dotItem[index].classList.add("active") // js ảnh theo con trỏ tròn và chạy theo con trỏ tròn
}
setInterval(imgSlide,5000) // sau 5 giây sẽ trượt ảnh



// menu CARTEGORY
const itemsliderbar = document.querySelectorAll(".container>div>div>ul>li")
itemsliderbar.forEach(function(menu,index){
    menu.addEventListener("click", function(){
        menu.classList.toggle("block")
    })
})
//----------------------- product
const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")
smallImg.forEach(function(imgItem,X){
    imgItem.addEventListener("click", function(){
        bigImg.src = imgItem.src
    })
})
const baoquan= document.querySelector(".baoquan")
const chitiet =document.querySelector(".chitiet")
if(baoquan){
    baoquan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
    })
}
if(chitiet){
    chitiet.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
    })
}
const button =document.querySelector(".product-content-right-bottom-top")
if(button){
    button.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}
