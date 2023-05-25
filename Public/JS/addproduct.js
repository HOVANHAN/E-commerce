const input = document.querySelectorAll('.input');
const image_file = document.querySelector('#thumb1-btn');
const image_file2 = document.querySelector('#thumb2-btn');

input.forEach(input => {
    input.addEventListener('change', (e) => {
        input.value==="" ? input.classList.remove('filled') : input.classList.add('filled');
    })
});


image_file.addEventListener('change', () => {
    const check_upload = document.querySelector('.image-upload-check1');
    const btn_upload = document.querySelector('#thumb1');

    image_file.value==="" ? check_upload.innerHTML="No file Uploaded" : check_upload.innerHTML="File already uploaded";
    image_file.value==="" ? btn_upload.classList.remove('active') : btn_upload.classList.add('active');
    
    const filename = image_file.value.replace(/^.*[\\\/]/, '');
    
    if(filename.length <= 16) {
        image_file.value==="" ? btn_upload.innerText="Upload File" : btn_upload.innerText=filename;
    } else {
        image_file.value==="" ? btn_upload.innerText="Upload File" : btn_upload.innerText= "... " + filename.slice(-12);
    }
})
image_file2.addEventListener('change', () => {
    const check_upload2 = document.querySelector('.image-upload-check2');
    const btn_upload2 = document.querySelector('#thumb2');

    image_file2.value==="" ? check_upload2.innerHTML="No file Uploaded" : check_upload2.innerHTML="File already uploaded";
    image_file2.value==="" ? btn_upload2.classList.remove('active') : btn_upload2.classList.add('active');
    
    const filename = image_file2.value.replace(/^.*[\\\/]/, '');
    
    if(filename.length <= 16) {
        image_file2.value==="" ? btn_upload2.innerText="Upload File" : btn_upload2.innerText=filename;
    } else {
        image_file2.value==="" ? btn_upload2.innerText="Upload File" : btn_upload2.innerText= "... " + filename.slice(-12);
    }
})

