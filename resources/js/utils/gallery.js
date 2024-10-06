export class Gallery {
    galleryContainer;
    galleryMiniImageContainer

    buttonDown;
    buttonUp;
    maxScroll;
    originHeightImage;
    constructor() {
        this.galleryContainer = document.querySelector('.gallery');
        this.galleryMiniImageContainer = document.querySelector('.gallery__miniContainer--main');

        this.initSmallGalleryPc();
    }

    calculateHeightAndUpdatePc() {
        let height = this.galleryContainer.scrollHeight;
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
        this.initButton();
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
