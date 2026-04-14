//to run the sound write PlaySound();

let audioCtx;
let audioBuffer; // cached decoded WAV

async function loadWavOnce() {
    audioCtx = new AudioContext(); // DO NOT set sampleRate

    const response = await fetch("sound.wav");
    const arrayBuffer = await response.arrayBuffer();

    audioBuffer = await audioCtx.decodeAudioData(arrayBuffer);
}
loadWavOnce();
// Play without refetching
async function PlaySound() {
    const src = audioCtx.createBufferSource();
    src.buffer = audioBuffer;
    src.connect(audioCtx.destination);
    src.start();
}