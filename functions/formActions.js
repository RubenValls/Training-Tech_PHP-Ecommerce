let btn = document.querySelector('#passwordBtn');
btn.addEventListener('mousedown', () =>{
    let pass = document.querySelector('#signUpPass');
    pass.type='text';
});
btn.addEventListener('mouseup', () =>{
    let pass = document.querySelector('#signUpPass');
    pass.type='password';
});