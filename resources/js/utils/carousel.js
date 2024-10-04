export class Carousel {

    containerCarousel;
    containerImages;
    previousButton;
    nextButton;
    widthImage;
    constructor(dataCarousel) {
        this.initPrimaryInformation(dataCarousel);
        this.initButtons();
    }

    initPrimaryInformation(dataCarousel) {
        this.containerCarousel = document.querySelector(`[${dataCarousel}]`);
        this.containerImages = this.containerCarousel.querySelector('.carousel__imagesContainer');
        this.widthImage = parseInt(this.containerImages.querySelector('.carousel__image').offsetWidth);
    }

    getCurrentLeftStyle() {
        let leftMarginCurrent = this.containerImages.style.left;

        if (leftMarginCurrent === '') return 0;
        else return parseInt(leftMarginCurrent);
    }
    changeNextPosition() {

        let currentLeftStyle = this.getCurrentLeftStyle();
        let leftMarginCurrent = this.containerImages.style.left;

        if (leftMarginCurrent === '') leftMarginCurrent = 0;
        else leftMarginCurrent = parseInt(leftMarginCurrent);

        console.log(leftMarginCurrent)
        let leftMarginNew = leftMarginCurrent - widthImage;
        console.log(leftMarginNew)
        this.containerImages.style.left = `${leftMarginNew}px`;
    }

    changePreviousPosition() {
        let widthImage = this.containerImages.querySelector('.carousel__image').offsetWidth;
        let leftMarginCurrent = this.containerImages.style.left;

        if (leftMarginCurrent === '') leftMarginCurrent = 0;
        else leftMarginCurrent = parseInt(leftMarginCurrent);

        console.log(leftMarginCurrent)
        let leftMarginNew = leftMarginCurrent - widthImage;
        console.log(leftMarginNew)
        this.containerImages.style.left = `${leftMarginNew}px`;
    }
    initButtons() {
        this.nextButton = this.containerCarousel.querySelector('[data-button-next]');
        this.previousButton = this.containerCarousel.querySelector('[data-button-previous]');

        this.nextButton.addEventListener('click', e => {
            this.changeNextPosition()
        });

        this.previousButton.addEventListener('click', e => {
            this.changePreviousPosition()
        });
    }
}
