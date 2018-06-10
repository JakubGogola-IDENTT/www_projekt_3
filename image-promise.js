function loadIMG(url, id){
    let P = new Promise( function (resolve, reject) {
            let parent = document.getElementById(id);
            let element = document.createElement('img');
            element.onload  = function() { resolve(url); };
            element.onerror = function() { reject(url) ; };
            element['src']  = url;
            parent.appendChild(element);
        }
    );
    return P;
}

Promise.all([
    loadIMG('images/hobby/kwiatek.jpg','img1'),
    loadIMG('images/hobby/uniwerek.JPG','img2'),
    loadIMG('images/hobby/wodospad.jpg','img3'),
    loadIMG('images/hobby/zima.JPG', 'img4')
]).then(function() {
    console.log("All images were loaded.");
}).catch(function() {
    console.log("Loading error!");
});
