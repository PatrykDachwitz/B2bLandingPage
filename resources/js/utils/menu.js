export class Menu {
    menuContainer
    imageTag
    constructor() {
        this.menuContainer = document.querySelector('.menu__container--submenu')
        this.imageTag = this.menuContainer.querySelector('.menu__image-change');

        this.initButtons()
    }

    initButtons() {
        this.initButtonsChangeBackGround();
        this.initButtonsChangeImage();
        this.initButtonMobile()
    }

    initButtonMobile() {
        const button = document.querySelector('.navbar-toggler');

        button.addEventListener('click', e => {
            this.changeMobileBackGroundMenu();
        })
    }
    changeMobileBackGroundMenu() {
        const menu = document.querySelector('.menu');

        if (menu.classList.contains('menu--scroll')) {
            if (window.scrollY <= 20) {
                menu.classList.remove('menu--scroll')
            }
        } else {
            menu.classList.add('menu--scroll');
        }
    }

    initButtonsChangeBackGround() {
        const submenu = document.querySelector('.menu__container--submenu');

        submenu.addEventListener('mouseover', e => {
            this.changeBackgroundColorMenu();
        })

        submenu.addEventListener('mouseout', e => {
            this.resetBackGroundColor();
        }, false)
    }

    resetBackGroundColor() {
        const menuMainContainer = document.querySelector('.menu');

        if (window.scrollY <= 20) {
            if (menuMainContainer.classList.contains('menu--scroll')) {
                menuMainContainer.classList.remove('menu--scroll');
            }
        }
    }
    changeBackgroundColorMenu() {
        const menuMainContainer = document.querySelector('.menu');

        if (!menuMainContainer.classList.contains('menu--scroll')) {
            menuMainContainer.classList.add('menu--scroll');
        }
    }
    initButtonsChangeImage() {
        const buttons = this.menuContainer.querySelectorAll('.dropdown-item');

        buttons.forEach(button => {
            button.addEventListener('mouseover', e =>{
                console.log('test');
                this.changeImage(button);
            })
        })
    }
    changeImage(button) {
        this.imageTag.src = button.dataset.src;
    }
}
