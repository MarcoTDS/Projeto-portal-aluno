class MobileNavBar{
    constructor(mobileMenu,navList,navItens){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navItens = this.navList.querySelectorAll(navItens);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }
    animatadeLinks(){
        this.navItens.forEach((link) => {

            link.style.animation
            ? (link.style.animation = "")
            : (link.style.animation = "navLinkFade 0.5s ease forwards 0.3s");
        });
    }
    handleClick(){
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animatadeLinks();
    }
    addClickEvent(){
        this.mobileMenu.addEventListener('click', this.handleClick);
    }
    init(){
        if(this.mobileMenu){
            this.addClickEvent();
        }
        return this;
    }
}
const mobileNavBar = new MobileNavBar(
    ".mobile-menu",
    ".navList",
    ".navList li",
);
mobileNavBar.init();

function showModal(){
    var element = document.getElementById('modal');
    element.classList.add('show-modal');
}
function hideModal(){
    var element = document.getElementById('modal');
    element.classList.remove('show-modal');
}