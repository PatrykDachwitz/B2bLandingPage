export class Carousel {

    containerCarousel;
    containerImages;
    columns;
    lengthColumn;
    previousButton;
    nextButton;
    widthImage;
    maxValueShift;
    scrollOriginalWidth;
    constructor(dataCarousel) {
        this.initPrimaryInformation(dataCarousel);

        if (window.innerWidth < this.scrollOriginalWidth) {
            this.initButtons();
        } else {
            this.removeButton();
        }
    }

    removeButton() {
        let nextButton = this.containerCarousel.querySelector('[data-button-next]');
        let previousButton = this.containerCarousel.querySelector('[data-button-previous]');

        nextButton.remove();
        previousButton.remove();

    }
    initPrimaryInformation(dataCarousel) {
        this.containerCarousel = document.querySelector(`[${dataCarousel}]`);
        this.containerImages = this.containerCarousel.querySelector('.carousel__imagesContainer');
        this.widthImage = parseInt(this.containerImages.querySelector('[data-carousel-column]').offsetWidth);

        this.calculateMaxValueShift();
        if (window.innerWidth < this.scrollOriginalWidth) {
            this.calculateColumnsInformation();
        }
    }

    calculateColumnsInformation() {
        this.columns = this.containerImages.querySelectorAll('[data-carousel-column]');
        this.lengthColumn = this.columns[this.columns.length - 1].dataset.carouselColumn;

        this.addSupportColumnPrevious()
    }

    addSupportColumnPrevious() {
        for (let i = this.lengthColumn; i > 0; i--) {
            this.addNewColumnPrevious();
        }

        this.resetLeftValueToStartOriginal();
    }
    calculateMaxValueShift() {
        let offsetWidth = this.containerImages.offsetWidth;
        this.scrollOriginalWidth = this.containerImages.scrollWidth;

        this.maxValueShift = (this.scrollOriginalWidth - offsetWidth);
    }

    getCurrentLeftStyle() {
        let leftMarginCurrent = this.containerImages.style.left;

        if (leftMarginCurrent === '') return 0;
        else return parseInt(leftMarginCurrent);
    }

    calculateLeftShiftMinus() {
        let currentLeftStyle = this.getCurrentLeftStyle();

        return (currentLeftStyle - this.widthImage);
    }
    calculateLeftShiftPlus() {
        let currentLeftStyle = this.getCurrentLeftStyle();

        /*console.log(currentLeftStyle);
        console.log(this.widthImage);*/
        return (currentLeftStyle + this.widthImage);
    }

    addNewColumnNext() {
        this.columns = this.containerImages.querySelectorAll('[data-carousel-column]');
        let lastColumnNumber = parseInt(this.columns[this.columns.length - 1].dataset.carouselColumn) + 1;
        if (lastColumnNumber > this.lengthColumn) lastColumnNumber = 1;
        let lastColumn = this.containerImages.querySelector(`[data-carousel-column="${ lastColumnNumber }"]`).cloneNode(true);
        this.containerImages.appendChild(lastColumn);
    }

    addNewColumnPrevious() {
        this.columns = this.containerImages.querySelectorAll('[data-carousel-column]');
        let lastColumnNumber = parseInt(this.columns[0].dataset.carouselColumn) - 1;
        if (lastColumnNumber < 1) lastColumnNumber = this.lengthColumn;
        let lastColumn = this.containerImages.querySelector(`[data-carousel-column="${ lastColumnNumber }"]`).cloneNode(true);
        this.containerImages.insertBefore(lastColumn, this.columns[0]);
    }

    checkNeedsBeAddedNewColumn(value) {

        if (Math.abs(value) > (this.scrollOriginalWidth + this.maxValueShift)) {
            return true;
        }

    }

    changeNextPosition() {
        let shiftValue = this.calculateLeftShiftMinus();

        if (this.checkNeedsBeAddedNewColumn(shiftValue)) this.addNewColumnNext();

        this.containerImages.style.left = `${shiftValue}px`;
    }

    resetLeftValueToStartOriginal() {
        this.containerImages.style.transition = 'none';
        this.containerImages.style.left = `-${this.scrollOriginalWidth}px`;
        setTimeout(() => {
            this.containerImages.style.transition = 'left 1s ease';
        }, 100);
    }

    changePreviousPosition() {
        let shiftValue = this.calculateLeftShiftPlus();

        if (this.widthImage > Math.abs(shiftValue)) {
            this.resetLeftValueToStartOriginal();
        } else {
            this.containerImages.style.left = `${shiftValue}px`;
        }
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
