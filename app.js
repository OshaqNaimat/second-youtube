    let video_input = document.querySelector('.video-input')
let video_btn = document.querySelector('.video-btn')
let first_form = document.querySelector('.first-form')
let second_form = document.querySelector('.second-form')
let back_first = document.querySelector('.back-first')
let video_preview = document.querySelector('.video-preview')
let video_title = document.querySelector('.video-title')
let video_desc = document.querySelector('.video-desc')
let third_form = document.querySelector('.third-form')
let fourth_form = document.querySelector('.fourth-form')
let video_elements_btn = document.querySelector('.video-elements-btn')
let back_second = document.querySelectorAll('.back-second')
let third_btn = document.querySelector('.third-btn')
let close = document.querySelector('.close')
let overlay= document.querySelector('.overlay')

close.addEventListener('click',()=>{
  first_form.classList.add('d-none')
  overlay.style.removeProperty("background-color");
})





video_input.addEventListener('input', (e) => {
    first_form.classList.add('d-none')
    second_form.classList.remove('d-none')
    let videoFile = e.target.files[0]
    let videoURL = URL.createObjectURL(videoFile)
    video_preview.src = videoURL

})


back_first.addEventListener('click', () => {
    first_form.classList.remove('d-none')
    second_form.classList.add('d-none')
})
back_second.forEach((item, index) => {
    item.addEventListener('click', () => {
        second_form.classList.remove('d-none')
        third_form.classList.add('d-none')
    })
})

video_desc.addEventListener('input', () => {
    video_title.innerHTML = video_desc.value
})

video_elements_btn.addEventListener('click', () => {
    second_form.classList.add('d-none')
    third_form.classList.remove('d-none')
})


document.addEventListener("DOMContentLoaded", () => {
    let third_btn = document.querySelector('.third-btn');
    let fourth_btn = document.querySelector('.fourth-btn');
    let third_form = document.querySelector('.third-form');
    let fourth_form = document.querySelector('.fourth-form');
    let fifth_form = document.querySelector('.fifth-form')
    let last_btn = document.querySelector('.last-btn')


    third_btn.addEventListener('click', () => {
        third_form.classList.add('d-none');
        fourth_form.classList.remove('d-none');
    });
    fourth_btn.addEventListener('click', () => {
        fourth_form.classList.add('d-none');
        fifth_form.classList.remove('d-none');
    });

    last_btn.addEventListener('click', () => {
        fifth_form.classList.add('d-none')
    })
});