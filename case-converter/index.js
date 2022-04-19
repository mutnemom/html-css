document.getElementById("upper-case").addEventListener("click", function () {
    let text = document.getElementById("textarea").value;
    document.getElementById("textarea").value =
        text.toUpperCase();
});

document.getElementById("lower-case").addEventListener("click", function () {
    let text = document.getElementById("textarea").value;
    document.getElementById("textarea").value =
        text.toLowerCase();
});

document.getElementById("proper-case").addEventListener("click", function () {
    let text = document.querySelector("textarea").value;
    let textArr = text.split(" ");
    text = "";
    for (let i = 0; i < textArr.length; i++) {
        let word = textArr[i];
        let First = word.substring(0, 1).toUpperCase();
        let Leftovers = word.substring(1, word.length)
        text += First + Leftovers + " ";

    }
    document.getElementById("textarea").value = text.trim();
});

document.getElementById("sentence-case").addEventListener("click", function sentenceCase() {
    let sentenceCase = document.querySelector("textarea").value.toLowerCase();
    let string = sentenceCase.split ('. ')
    for (let i = 0; i < string.length; i++) {
        string[i] = string[i].charAt(0).toUpperCase() + string[i].substring(1);
    }
    sentenceCase = string.join('. ')
    document.querySelector("textarea").value = sentenceCase;
});

function download(filename, text) {
    let element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}

let textArea = document.querySelector("textarea");

document.getElementById("save-text-file").addEventListener("click", function () {
    download("text.txt", textArea.value);
});