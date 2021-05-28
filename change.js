function change() {
    if (el.value === 'topLeft') {
        el.form.action = 'cyclicMatrixTopLeft.php';
    } else if(el.value === 'topRight'){
        el.form.action = 'cyclicMatrixTopRight.php';
    }
}