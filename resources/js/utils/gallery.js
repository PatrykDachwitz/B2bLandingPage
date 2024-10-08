export class Gallery {
    galleryContainer;
    galleryMiniImageContainer

    buttonDown;
    buttonNext;
    buttonPrevious;
    buttonUp;
    maxScroll;
    originHeightImage;
    originWidthImage;
    maxShiftScroll;
    constructor() {
        this.galleryContainer = document.querySelector('.gallery');
        this.galleryMiniImageContainer = document.querySelector('.gallery__miniContainer--main');


        if (window.innerWidth > 991) {
            this.initSmallGalleryPc();
        } else {
            this.initSmallGalleryMobile();
        }
    }

    calculateWidthImage() {
        this.originWidthImage = document.querySelector('.gallery__mainContainer--image').offsetWidth;
    }

    calculateMaxShiftLeft() {
        let offsetParentContainer = document.querySelector(".gallery__container--miniImage").offsetWidth;
        let scrollChildContainer = this.galleryMiniImageContainer.scrollWidth;

        this.maxShiftScroll = scrollChildContainer - offsetParentContainer;
    }
    initSmallGalleryMobile() {
        this.calculateWidthImage();
        this.calculateMaxShiftLeft()

        const miniImages = document.querySelectorAll('.gallery__mainContainer--image');

        miniImages.forEach(miniImage => {
            miniImage.classList.remove('d-lg-none');
            miniImage.addEventListener('click', e => {
                this.changeImage(miniImage.dataset.gallerySmall);
            });

        })

        this.initButtonMobile();
    }

    getCurrentLeft() {
        let currentLeft = this.galleryMiniImageContainer.style.left;

        if (currentLeft === "") return 0
        else return parseInt(currentLeft);
    }
    nextImageScroll() {
        let leftShift = this.getCurrentLeft();
        let newShiftLeft = leftShift - this.originWidthImage;

        if(Math.abs(this.maxShiftScroll) <= Math.abs(newShiftLeft)) {
            this.galleryMiniImageContainer.style.left = `-${this.maxShiftScroll}px`;
            this.disabledButton('next');
            this.activateButton('previous');
        } else {
            this.galleryMiniImageContainer.style.left = `${newShiftLeft}px`;
            this.activateButton('previous');
        }
    }

    previousImageScroll() {
        let leftShift = this.getCurrentLeft();
        let newShiftLeft = leftShift + this.originWidthImage;

        if (newShiftLeft >= 0) {
            this.galleryMiniImageContainer.style.left = `0`;
            this.disabledButton('previous');
            this.activateButton('next');
        } else {
            this.galleryMiniImageContainer.style.left = `${newShiftLeft}px`;
            this.activateButton('next');
        }

    }


    initButtonMobile() {
        this.buttonNext = document.querySelector('.gallery__button--down');
        this.buttonPrevious = document.querySelector('.gallery__button--up');

        this.buttonNext.addEventListener('click', e => {
            this.nextImageScroll();
        });

        this.buttonPrevious.addEventListener('click', e => {
            this.previousImageScroll();
        });
    }


    calculateHeightAndUpdatePc() {
        let height = this.galleryContainer.offsetHeight;
        let miniImageContainer = document.querySelector('.gallery__container--miniImage');
        miniImageContainer.style.maxHeight = `${height}px`;

        return height;
    }
    initSmallGalleryPc() {
        let height = this.calculateHeightAndUpdatePc();
        const miniImages = document.querySelectorAll('.gallery__mainContainer--image');

        miniImages.forEach(miniImage => {
            miniImage.classList.remove('d-lg-none');
            miniImage.addEventListener('click', e => {
               this.changeImage(miniImage.dataset.gallerySmall);
            });

        })

        this.maxScroll = (this.galleryMiniImageContainer.scrollHeight - height);
        this.originHeightImage = miniImages[0].offsetHeight;

        if (this.galleryMiniImageContainer.offsetHeight <= 600) {
            this.removeButton();
        } else {
            this.initButton();
        }
    }

    removeButton() {
        document.querySelector('.gallery__button--down').remove();
        document.querySelector('.gallery__button--up').remove();

    }
    initButton() {
        this.buttonDown = document.querySelector('.gallery__button--down');
        this.buttonUp = document.querySelector('.gallery__button--up');

        this.buttonDown.addEventListener('click', e => {
           this.downScroll();
        });

        this.buttonUp.addEventListener('click', e => {
           this.upScroll();
        });
    }

    getCurrentTopValue() {
        let currentTop = this.galleryMiniImageContainer.style.top;

        if (currentTop === '') return 0;
        else return parseInt(currentTop);
    }


    disabledButton(button) {
        switch (button) {
            case "down":
                this.buttonDown.style.display = "none";
                break;
            case 'up':
                this.buttonUp.style.display = "none";
                break;
            case "next":
                this.buttonNext.style.display = "none";
                break;
            case 'previous':
                this.buttonPrevious.style.display = "none";
                break;
        }
    }

    activateButton(button) {
        switch (button) {
            case "down":
                this.buttonDown.style.display = "";
                break;
            case "up":
                this.buttonUp.style.display = "";
                break;
            case "next":
                this.buttonNext.style.display = "";
                break;
            case "previous":
                this.buttonPrevious.style.display = "";
                break;
        }

    }


    downScroll() {
        let currentTop = this.getCurrentTopValue();
        let newTopValue = currentTop - this.originHeightImage;

        if (Math.abs(newTopValue) > Math.abs(this.maxScroll)) {
            this.disabledButton('down');
            this.galleryMiniImageContainer.style.top = `-${this.maxScroll}px`;
        } else {
            this.activateButton('up')
            this.galleryMiniImageContainer.style.top = `${newTopValue}px`;
        }
    }

    upScroll() {
        let currentTop = this.getCurrentTopValue();
        let newTopValue = currentTop + this.originHeightImage;

        console.log(newTopValue)
        if (newTopValue >= 0) {
            this.disabledButton('up');
            this.galleryMiniImageContainer.style.top = `0px`;
        } else {
            this.activateButton('down')
            this.galleryMiniImageContainer.style.top = `${newTopValue}px`;
        }
    }
    clearActiveGalleryImage() {
        document.querySelector('div.carousel-item.active').classList.remove('active');
    }
    changeImage(number) {
        const searchElement = document.querySelector(`div[data-galler-index="${number}"]`);

        this.clearActiveGalleryImage();
        searchElement.classList.add('active');
    }


}
