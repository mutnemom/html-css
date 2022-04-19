let notes = ["KeyA", "KeyS", "KeyD", "KeyF", "KeyG", "KeyH", "KeyJ", "KeyW", "KeyE", "KeyT", "KeyY", "KeyU"];

document.addEventListener("keydown", function (event) {
    if (notes.includes(event.code)) {
        let audio = new Audio(`audio/${event.code}.mp3`);
        audio.play();
    } else {
        console.warn(`Unsupported key '${event.key}' pressed.`);
    }
});