function toDataURL(src, callback) {
    let img = new Image();
    img.crossOrigin = "anonymous";
    img.onload = function () {
        let canvas = document.createElement('CANVAS');
        let ctx = canvas.getContext('2d');
        let dataURL;
        canvas.height = this.naturalHeight;
        canvas.width = this.naturalWidth;
        ctx.drawImage(this, 0, 0);
        dataURL = canvas.toDataURL();
        callback(dataURL);
    };

    img.src = src;
    if (img.complete || img.complete === undefined) {
        img.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
        img.src = src;
    }
}

function ImageLoader(imageId, localStorageKey, imgSrc) {
    this.imageId = imageId;
    this.localStorageKey = localStorageKey;
    this.imgSrc = imgSrc;
}

ImageLoader.prototype.loadImage = function () {
    console.log(this.imageId);
    console.log(this.localStorageKey);
    console.log(this.imgSrc);

    let that = this;
    let img = document.getElementById(this.imageId);

    if (localStorage.getItem(this.localStorageKey) !== null) {
        img.src = localStorage.getItem(this.localStorageKey);
        console.log("Image loaded: " + this.localStorageKey);
    } else {
        toDataURL(
            that.imgSrc,
            function (dataUrl) {
                console.log("Image loaded from " + that.imgSrc);
                console.log(dataUrl.slice(0,100));
                localStorage.setItem(that.localStorageKey, dataUrl);
                img.src = dataUrl;
            }
        )
    }
};

ImageLoader.prototype.clearLocalStorage = function () {
  localStorage.removeItem(this.localStorageKey);
};

let authorImg = new ImageLoader("authorImg", "authorPhoto", "images/jg.jpg");
authorImg.loadImage();
authorImg.clearLocalStorage();