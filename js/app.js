const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");

const products = [
    {
        id: 1,
        title: "Iphone 14",
        price: 799,
        colors: [
            {
                code: "black",
                img: "./img/img/i14/0 (1).jpg",
            },
            {
                code: "lightblue",
                img: "./img/img/i14/0 (3).jpg",
            },
        ],
    },
    {
        id: 2,
        title: "Iphone 14 pro",
        price: 1199,
        colors: [
            {
                code: "black",
                img: "./img/img/i14pro/0.jpg",
            },
            {
                code: "gold",
                img: "./img/img/i14pro/0 (4).jpg",
            },
        ],
    },
    {
        id: 3,
        title: "Samsung S22 Ultra",
        price: 1299,
        colors: [
            {
                code: "black",
                img: "./img/img/s22u/0 (5).jpg",
            },
            {
                code: "lightgray",
                img: "./img/img/s22u/0 (7).jpg",
            },

        ],
    },
    {
        id: 4,
        title: "Google Pixel",
        price: 789,
        colors: [
            {
                code: "lightgray",
                img: "./img/img/pixel/whitepixel7.jpg",
            },
            {
                code: "black",
                img: "./img/img/pixel/blackpixel.webp",
            },

        ],
    },
    {
        id: 5,
        title: "Nothing Phone",
        price: 450,
        colors: [
            {
                code: "black",
                img: "./img/img/nothing/black.webp",
            },
            {
                code: "lightgray",
                img: "./img/img/nothing/white2.webp",
            },
        ],
    },
];

let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductColors = document.querySelectorAll(".color");
const currentProductSizes = document.querySelectorAll(".size");




menuItems.forEach((item, index) => {
    item.addEventListener("click", () => {
        //change the current slide
        wrapper.style.transform = `translateX(${-100 * index}vw)`;

        //change the choosen product
        choosenProduct = products[index];

        //change texts of currentProduct
        currentProductTitle.textContent = choosenProduct.title;
        currentProductPrice.textContent = "$" + choosenProduct.price;
        currentProductImg.src = choosenProduct.colors[0].img;

        //assing new colors
        currentProductColors.forEach((color, index) => {
            color.style.backgroundColor = choosenProduct.colors[index].code;
        });
    });
});

currentProductColors.forEach((color, index) => {
    color.addEventListener("click", () => {
        currentProductImg.src = choosenProduct.colors[index].img;
    });
});

currentProductSizes.forEach((size, index) => {
    size.addEventListener("click", () => {
        currentProductSizes.forEach((size) => {
            size.style.backgroundColor = "white";
            size.style.color = "black";
        });
        size.style.backgroundColor = "black";
        size.style.color = "white";
    });
});

const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

productButton.addEventListener("click", () => {
    payment.style.display = "flex";
});

close.addEventListener("click", () => {
    payment.style.display = "none";
});

function validoInput () {
    var emriUserit = document.getElementById('emrimbiemri').value;
    var numriTelit = document.getElementById('nrtelit').value;
    var adresa= document.getElementById('adresa').value;
    var nrKarteles=document.getElementById('cardnumber').value;
    var dataSkadimit=document.getElementById('dataSkadimit').value;

    // console.log(emriUserit);
    // console.log(pass);

    if(emriUserit == "") {
        alert("Duhet te shenosh username")
    }
    if (numriTelit=="") {
        alert("Duhet te shenosh nje numer")
    }
    if (adresa=="") {
        alert("Duhet te shenosh nje adress")
    }
    if (nrKarteles="") {
        alert("Duhet te shenosh numrin e karteles")
    }
    if (dataSkadimit="") {
        alert("Duhet te vendosesh daten e skadimit te karteles")
    }
    else{
        alert("U perfundua me sukses")
    }

}


